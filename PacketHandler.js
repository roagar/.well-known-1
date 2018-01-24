var pjson = require('../package.json');
var Packet = require('./packet');
var BinaryReader = require('./packet/BinaryReader');

function PacketHandler(gameServer, socket) {
    this.gameServer = gameServer;
    this.socket = socket;
    this.protocol = 0;
    this.isHandshakePassed = false;
    this.lastChatTick = 0;

    this.pressQ = false;
    this.pressW = false;
    this.pressSpace = false;
    this.lastStatTime = +new Date;
}

module.exports = PacketHandler;

PacketHandler.prototype.handleMessage = function(message) {
    // Validation
    if (message.length == 0) {
        return;
    }
    
    // no handshake?
    if (!this.isHandshakePassed) { 
        if (message[0] != 254 || message.length != 5) {
            // wait handshake
            return;
        }
        
        var reader = new BinaryReader(message);
        reader.skipBytes(1);
        
        // Handshake request
        this.protocol = reader.readUInt32();
        if (this.protocol < 1 || this.protocol > 8) {
            return;
        }
        // Send handshake response
        this.socket.sendPacket(new Packet.ClearAll());
        this.socket.sendPacket(new Packet.SetBorder(this.socket.playerTracker, this.gameServer.border, this.gameServer.config.serverGamemode, "MultiOgar " + pjson.version));
        // Send welcome message
        if (this.gameServer.config.serverWelcome2)
            this.gameServer.sendChatMessage(null, this.socket.playerTracker, this.gameServer.config.serverWelcome2);
        if (this.gameServer.config.serverChat == 0)
            this.gameServer.sendChatMessage(null, this.socket.playerTracker, "This server's chat is disabled.");
        if (this.protocol < 4)
            this.gameServer.sendChatMessage(null, this.socket.playerTracker, "WARNING: Protocol " + this.protocol + " assumed as 4!");
        this.isHandshakePassed = true;
        return;
    }
    this.socket.lastAliveTime = +new Date;
    
    var reader = new BinaryReader(message);
    var packetId = reader.readUInt8();

    switch (packetId) {
        case 0:
            if (this.socket.playerTracker.cells.length > 0) {
                break;
            }
            var text = null;
            if (this.protocol <= 5)
                text = reader.readStringZeroUnicode();
            else
                text = reader.readStringZeroUtf8();
            this.setNickname(text);
            break;

        case 1:
            // Spectate mode
            if (this.socket.playerTracker.cells.length <= 0) {
                // Make sure client has no cells
                this.socket.playerTracker.spectate = true;
            }
            break;
        case 16:
            // Mouse
            var client = this.socket.playerTracker;
            if (message.length == 13) {
                // protocol late 5, 6, 7
                client.mouse.x = reader.readInt32() - client.scrambleX;
                client.mouse.y = reader.readInt32() - client.scrambleY;
            } else if (message.length == 9) {
                // early protocol 5
                client.mouse.x = reader.readInt16() - client.scrambleX;
                client.mouse.y = reader.readInt16() - client.scrambleY;
            } else if (message.length == 21) {
                // protocol 4
                client.mouse.x = reader.readDouble() - client.scrambleX;
                client.mouse.y = reader.readDouble() - client.scrambleY;
                if (isNaN(client.mouse.x))
                    client.mouse.x = client.centerPos.x;
                if (isNaN(client.mouse.y))
                    client.mouse.y = client.centerPos.y;
            }
            break;
        case 17:
            // Space Press - Split cell
            this.pressSpace = true;
            break;
        case 18:
            // Q Key Pressed
            this.pressQ = true;
            break;
        case 19:
            // Q Key Released
            break;
        case 21:
            // W Press - Eject mass
            this.pressW = true;
            break;
        case 99:
            // Chat
            if (message.length < 3)             // first validation
                break;
                
            var tick = this.gameServer.getTick();
            var deltaTick = tick - this.lastChatTick;
            this.lastChatTick = tick;
            if (deltaTick < 20 * 2)
                break;
            
            var flags = reader.readUInt8();    // flags
            var rvLength = (flags & 2 ? 4:0) + (flags & 4 ? 8:0) + (flags & 8 ? 16:0);
            if (message.length < 3 + rvLength) // second validation
                break;
            reader.skipBytes(rvLength);        // reserved
            var text = null;
            if (this.protocol < 6)
                text = reader.readStringZeroUnicode();
            else
                text = reader.readStringZeroUtf8();
            this.gameServer.onChatMessage(this.socket.playerTracker, null, text);
            break;
        case 254:
            // Server stat
            var time = +new Date;
            var dt = time - this.lastStatTime;
            this.lastStatTime = time;
            if (dt < 1000) break;
            this.socket.sendPacket(new Packet.ServerStat(this.socket.playerTracker));
            break;
        default:
            break;
    }
};

PacketHandler.prototype.setNickname = function (text) {
    var name = "";
    var skin = null;
    if (text != null && text.length != 0) {
        var n = -1;
        if (text.charAt(0) == '<' && (n = text.indexOf('>', 1)) >= 0) {
            skin = "%" + text.slice(1, n);
            name = text.slice(n + 1);
        } else {
            name = text;
        }
    }
    if (name.length > this.gameServer.config.playerMaxNickLength) {
        name = name.substring(0, this.gameServer.config.playerMaxNickLength);
    }
    if (this.gameServer.checkBadWord(name)) {
        skin = null;
        name = "욕설 사용자!";
    }
    this.socket.playerTracker.joinGame(name, skin);
};

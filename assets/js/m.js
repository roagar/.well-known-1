window.addEventListener('keydown', keydown);
window.addEventListener('keyup', keyup);
var Feed = false;
var Dingus = false;
var imlost = 25;

load();
function load() {
    if (document.getElementById("overlays").style.display!="none") {
       
    } else {
        setTimeout(load, 100);
    }
} 
function keydown(event) {
    if (event.keyCode == 87 || event.keyCode == 69) {
        Feed = true;
        setTimeout(fhor, imlost);
    } 
    if (event.keyCode == 84 || event.keyCode == 90) { 
        for (var b = 0; b < 4; b++) setTimeout(ilikedick, b * 50);
    }  
    if (event.keyCode == 68 ) {
        ilikedick();
        setTimeout(ilikedick, 50);
    }
    if (event.keyCode == 83) { 
        X = window.innerWidth/2;
        Y = window.innerHeight/2;
        $("canvas").trigger($.Event("mousemove", {clientX: X, clientY: Y}));
    }
}
function keyup(event) {
    if (event.keyCode == 81) {
        Feed = false;
    }
    if (event.keyCode == 79) {
        Dingus = false;
    }
}

function fhor() {
    if (Feed) {
        window.onkeydown({keyCode: 87});
        window.onkeyup({keyCode: 87});
        setTimeout(fhor, imlost);
    }
}
function ilikedick() {
    $("body").trigger($.Event("keydown", { keyCode: 32}));
    $("body").trigger($.Event("keyup", { keyCode: 32}));
}

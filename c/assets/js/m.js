window.addEventListener("keydown",keydown);window.addEventListener("keyup",keyup);var canFeed=false;function keydown(event){if(event.keyCode==87||event.keyCode==69){canFeed=true;feed()}if(event.keyCode==84||event.keyCode==90)for(var b=0;b<4;b++)setTimeout(split,b*50);if(event.keyCode==68){split();setTimeout(split,50)}}function keyup(event){if(event.keyCode==87||event.keyCode==69)canFeed=false}
function feed(){if(!canFeed)return;window.onkeydown({keyCode:87});window.onkeyup({keyCode:87});setTimeout(feed,0)}function split(){$("body").trigger($.Event("keydown",{keyCode:32}));$("body").trigger($.Event("keyup",{keyCode:32}))};
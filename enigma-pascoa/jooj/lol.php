<?php
 $_rand_ads = rand(1, 1);
 $_rand_virtus_ads = rand(1, 5);
 if ($_rand_ads == "1") {  if ($_rand_virtus_ads == "1"){  $adsti = 'you.png';  } 
 elseif ($_rand_virtus_ads == "2") {  $adsti = 'are.png';  } 
 elseif ($_rand_virtus_ads == "3") {  $adsti = 'my.png';  } 
 elseif ($_rand_virtus_ads == "4") {  $adsti = 'best.png';  }
 elseif ($_rand_virtus_ads == "5") {  $adsti = 'friend.png';  }
 elseif ($_rand_virtus_ads == "6") {  $adsti = 'friend';  } } ?>
<!-- ONE STEP TO INSTALL BOUNCING IMAGE:

  1.  Copy the coding into the BODY of your HTML document  -->

<!-- STEP ONE: Paste this code into the BODY of your HTML document  -->

<BODY>
<style>
#img {
width:100%;
}
</style>
<div id="img" style="position:absolute;">
<img src="https://portalgaming.com.br/eggs/<?php echo $adsti;?>" onMouseDown="pauseResume();">
</div>
Recarregar

<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Justin Arruda (JArruda@mindspring.com) -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
var step = 1;
var delay = 30;
var height = 0;
var Hoffset = 0;
var Woffset = 0;
var yon = 0;
var xon = 0;
var pause = true;
var interval;
var name = navigator.appName;
if(name == "Microsoft Internet Explorer") name = true;
else name = false;
var xPos = 20;
if(name) var yPos = document.body.clientHeight;
else var yPos = window.innerHeight;
function changePos() {
if(name) {
width = document.body.clientWidth;
height = document.body.clientHeight;
Hoffset = img.offsetHeight;
Woffset = img.offsetWidth;
img.style.left = xPos + document.body.scrollLeft;
img.style.top = yPos + document.body.scrollTop;
}
else {
height = window.innerHeight;
width = window.innerWidth;
Hoffset = document.img.clip.height;
Woffset = document.img.clip.width;
document.img.pageY = yPos + window.pageYOffset;
document.img.pageX = xPos + window.pageXOffset;
}
if (yon) {
yPos = yPos + step;
}
else {
yPos = yPos - step;
}
if (yPos < 0) {
yon = 1;
yPos = 0;
}
if (yPos >= (height - Hoffset)) {
yon = 0;
yPos = (height - Hoffset);
}
if (xon) {
xPos = xPos + step;
}
else {
xPos = xPos - step;
}
if (xPos < 0) {
xon = 1;
xPos = 0;
}
if (xPos >= (width - Woffset)) {
xon = 0;
xPos = (width - Woffset);
   }
}
function start() {
if(name) img.visibility = "visible";
else document.img.visibility = "visible";
interval = setInterval('changePos()',delay);
}
function pauseResume() {
if(pause) {
clearInterval(interval);
pause = false;
}
else {
interval = setInterval('changePos()',delay);
pause = true;
   }
}
start();
//  End -->
</script>
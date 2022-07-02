<?php
 $_rand_ads = rand(1, 1);
 $_rand_virtus_ads = rand(1, 5);
 if ($_rand_ads == "1") {  if ($_rand_virtus_ads == "1"){  $adsti = 'you.png';  } 
 elseif ($_rand_virtus_ads == "2") {  $adsti = 'are.png';  } 
 elseif ($_rand_virtus_ads == "3") {  $adsti = 'my.png';  } 
 elseif ($_rand_virtus_ads == "4") {  $adsti = 'best.png';  }
 elseif ($_rand_virtus_ads == "5") {  $adsti = 'friend.png';  }
 elseif ($_rand_virtus_ads == "6") {  $adsti = 'friend';  } } ?>
<html>
<head>
	<meta charset="UTF-8" />
     <title>The puzzle of bunny ( ͡~ ͜ʖ ͡°) ~ Welcome ~</title>
    <meta property="og:title" content="The puzzle of bunny ( ͡~ ͜ʖ ͡°)"/>
	<meta property="og:site_name" content="PortalGaming" />
    <meta description="The puzzle ( ͡~ ͜ʖ ͡°)" />
    <meta name="viewport" content="width=1024px" />
    <meta name="theme-color" content="#2d2d2d" />
    <link rel="image_src" href='../coeio.png' />
    <meta property="og:description" content="Decipher the power of the dark rabbits! ( ‾ʖ̫‾)" />
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lemon|Lily+Script+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.ico" />
   <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <link rel="shortcut icon" href="../faviconu.ico" />
            <script> var repeat=1 
            var title=document.title
            var leng=title.length
            var start=1
            function titlemove () {
            titl=title.substring(start, leng) + title.substring(0, start)
            document.title=titl
            start++
            if (start==leng+1) {
            start=0
            if (repeat==0)
            return
            }
            setTimeout("titlemove()",50)
            }
            if (document.title)
            titlemove()
        </script>
	<style>
    body {text-align: center;padding: 50px;
        background: #2C2F33 url(../wp_bg.png);
        margin-left:200px;
        margin-right:200px;

    }
    #clickedleeow {cursor:pointer;}

    .btn btn-outline-danger:hover,btn btn-outline-warning:hover,btn btn-outline-primary:hover {    -webkit-transition: background 2s;    transition: background 2s;}
    .btn-outline-info {color:#7289DA !important;border-color: #7289DA !important;}
    .btn-outline-info:hover {background-color:#7289DA !important;color: #fff !important;fill: #fff !important;}
    .btn-outline-info a:hover svg {fill:#fff !important;}
    .preload{    
        position: fixed;    
        z-index:99999;    
        top:0; 
        left:0;    
        width:100%; 
        height:100%;    
        background-color:#2C2F33;      
        background-position:50% 50%;    
        background-repeat:no-repeat;
    }
    
    #discord{
        margin-top:300px;
        width: 15%;
        margin-bottom: -30px;
        }

    #title1 {
        text-align: center;
        font-family: 'Lemon', cursive;
        font-size: 60pt;
        color: #ff2626;
        text-shadow:0px 0.05em 0px #bc1a1a;
        margin-right: 400px;
    }
    #title2 {
        text-align: center;
        font-family: 'Lemon', cursive;
        font-size: 60pt;
        color: #fff;
        text-shadow:0px 0.05em 0px #c9c9c9;
        margin-left: 10px;
        margin-top: -20px;
    }
    #subtitle {
        text-align: center;
        margin-top:10px;
        font-size: 30pt;
        color: #000000;
        text-shadow:0px 0.05em 0px #666666;
        font-family: 'Lily Script One', cursive;
    }

    -webkit-keyframes swinging{
    0%{-webkit-transform: rotate(3deg);}
    50%{-webkit-transform: rotate(-1deg)}
    100%{-webkit-transform: rotate(3deg);}
}
 
    @keyframes swinging{
    0%{transform: rotate(3deg);}
    50%{transform: rotate(-1deg)}
    100%{transform: rotate(3deg);}
}
 
    .swingimage{
    -webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
    -webkit-animation: swinging 3.5s ease-in-out forwards infinite;
    animation: swinging 3.5s ease-in-out forwards infinite;
}
    #container{
    width:400px;
    height:450px;
    background:#2C2F33;
    border:#2C2F33 dashed 2px;
    position: relative;
    display: inline;
    margin-top:50px;
    opacity: 0.8;
    }
    #botao {
        border-radius:4px;
        cursor: pointer;
        font-family: 'Oswald', sans-serif;
        font-size:20px;
        margin-top:25px;
        margin-left:15px;
        margin-right:15px;
        color:#fff;
        transition:all .1s linear 0s;
        padding:4px 12px 5px;
        outline:0;
    }
    #botao:active {
  background-color: #3e8e41;
  box-shadow: 0 3px rgba(0, 0, 0, 0.1);;
  transform: translateY(4px);
}
    #botao a {
            text-decoration: none;        
            color:none;
    }
    #botao a:hover {
        color:none;
    }
    a {
    text-decoration: none;
    }
    a:hover {
        text-decoration: none;
    }
    #objeto{
        cursor: pointer;
    }
    </style>
</head>


<SCRIPT LANGUAGE="JavaScript">
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
<body> 
    <span id='topo'></span>
    <img id="objeto" src="../coeio.png" width="20%" title="Darkness Bunny" />
    <div id="subtitle" class="swingimage">The puzzle of bunny</div>
    <br><br><span style="color:#fff">Congratulations! You decypher the puzzle of bunny!</span><br><br><br>
<br><span style="color:#fff">Decipher the power of the dark rabbits! by <a href="https://github.com/leonardocjr/" target="_blank">Leonardo C. Junior</a></span> <br>Apoio:
</body></html>



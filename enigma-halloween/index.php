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
     <title>Bem-vindo, o Halloween começa! - Enimga SkyCraft</title>
    <meta property="og:title" content="Enigma - SkyCraft"/>
	<meta property="og:site_name" content="SkyCraft" />
    <meta description="The puzzle ( ͡~ ͜ʖ ͡°)" />
    <meta name="viewport" content="width=1024px" />
    <meta name="theme-color" content="#bb00ff" />
    <link rel="image_src" href='http://forum.skycraft.com.br/leeow/testes/mobile/imgs/logo.png' />
    <meta property="og:url" content="https://skycraft.com.br" />
    <meta property="og:image" content="http://forum.skycraft.com.br/leeow/testes/mobile/imgs/logo.png"/>
    <meta property="og:description" content="O mistério começa!" />


    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lemon|Lily+Script+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="shortcut icon" href="imgs/favicon.ico" />
   <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <link rel="shortcut icon" href="imgs/faviconu.ico" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
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


document.addEventListener('contextmenu', event => event.preventDefault());
        </script>
	<style>
    body {text-align: center;padding: 50px;
        background: #181818 /*url(https://media4.giphy.com/media/93j3soUou1gaHJpY4Q/giphy.gif) repeat-x*/;
        /*background-size:cover; */
       left:0;
        top:0;

    }
    #clickedleeow {cursor:pointer;}

    .btn btn-outline-danger:hover,btn btn-outline-warning:hover,btn btn-outline-primary:hover {    -webkit-transition: background 2s;    transition: background 2s;}
    .btn-outline-info {color:#a90000 !important;border-color: #a90000 !important;}
    .btn-outline-info:hover {background-color:#a90000 !important;color: #fff !important;fill: #fff !important;}
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
        color: #ff9e42;
        text-shadow:0px 0.05em 0px #000;
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
        margin-left:5px;
        margin-right:5px;
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

 @font-face {
    font-family: Benguiat;
    src: url(/fonts/benguiat.ttf)
}

#bla{
    font-family: Benguiat;
}

.objeto{
content:url(imgs/enigma-logo.png);
width: 100%;
animation: shake 5s cubic-bezier(.36,.07,.19,.97) both infinite;width:100%;
}

@media only screen and (max-device-width: 600px) {
.objeto{
content:url(imgs/logo.png);
}
}
    </style>

</head>
<!--<div id="img" style="position:absolute;">-->
<!-- <img src="https://portalgaming.com.br/eggs/<?php echo $adsti;?>" onMouseDown="pauseResume();"> -->
</div>

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
<style>
	@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0px, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0px, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0px, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0px, 0);
  }
}
footer{
  position: fixed;
  left: 0;
  bottom: 0;
  text-align: center;
  width: 100%;
  margin-bottom:20px;
}
</style>
<body>
    <div class="objeto"></div> 
    <!-- <div id="subtitle" class="swingimage"><span style="color:#8f00dd;text-shadow:0px 0.05em 0px #000;">Enigma</span> Halloween<br>-->
        <!-- <span style="font-family: benguiat;font-size:40pt;color:#a90000;">Enigma SkyCraft</span> -->

<br />

        <!-- <span style="color:#fff">SkyCraft</span>-->
    <a href="X"><button id="botao" style="font-size:25pt;background:#a90000;box-shadow:0 5px 0 #890101;border:0;"><i class="fas fa-arrow-alt-circle-right"></i> Começar</button></a>
    <a href="#"><button id="botao" style="font-size:25pt;background:#6800a9;box-shadow:0 5px 0 #590189;border:0;"><i class="fa fa-info-circle" aria-hidden="true"></i> Dicas</button></a>

<footer><span style="color:#fff">Decifre o mistério por <a href="https://github.com/leonardocjr/" target="_blank">Leonardo C. Junior. 🎃</a></span></footer>
</body></html>



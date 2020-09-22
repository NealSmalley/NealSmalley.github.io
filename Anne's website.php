<!DOCTYPE html> 
<html>
<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
<header>
<div class = "header">
    <div class = "headeritem">
        <h1>Anne</h1>
    </div>
    <div class = "headeritem">
        <h1>home</h1>
    </div>
    <div class = "headeritem">
        <h1>search</h1>
    </div>
    <div class = "headeritem">
        <h1>Dance</h1>
    </div>
    <div class = "headeritem">
        <h1>Have fun</h1>
    </div>
    <div class = "headeritem">
        <h1>Change</h1>
    </div>
</div>
</header>

<head>
<style>

/* Slideshow container */
.slideshow-container {
  max-width: 50%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  right: 20%;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

a.prev {
    width: 15%;
    right: 100%;
    top: 30%;
}

/* Position the "next button" to the right */
a.next {
  width: 15%;
  right: -20%;
  top: 30%;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


/* On smaller screens, decrease text size */
@media only screen and (max-width: 100px) {
}
.prev, .next,.text {

}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/Anne's picture2.jpg" style="width:100%;height:300px">
</div>

<div class="mySlides fade">
  <img src="img/Anne's picture2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/Anne's picture2.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)"><img src="img/Anne's left arrow2.png" style="width:115%"></a>
<a class="next" onclick="plusSlides(1)"><img src="img/Anne's right arrow3.png" style="width:115%"></a>

</div>
<br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  
}
</script>

</body>

<div class = "body">
    <div class = "bodyitem">
        <h1>How to dance</h1>
    </div>
    <div class = "bodyitem">
        <h1>How to do Oragami</h1>
    </div>
    <div class = "bodyitem">
        <h1>How to draw</h1>
    </div>
    <div class = "bodyitem">
        <h1>How to play game</h1>
    </div>
    <div class="bodymore">
        <h1>More</h1>
    </div>
</div>

<div class="holder clip">
    <div class="ellipse ellipse1"></div>
    <div class="ellipse ellipse2"></div>
</div>

<div class = "body2">
    <div class = "bodyitem2">
        <h1>how to do origami</h1>
    </div>
    <div class = "bodyitem2">
        <h1>how to play piano the begining</h1>
    </div>
    <div class = "bodyitem2">
        <h1>how to talk</h1>
    </div>
    <div class="bodymore2">
        <img src="img/shapes.jpg" style="width:110%;height:150px">
        <div class="centered"><h1>Not Move</h1></div>
    </div>
</div>

<img src="img/Anne's squigly.png" style="width:100%;height:20px;padding-top:80px">

<div class = "body3">
    <div class = "bodyitem3">
        <h1>how to sing</h1>
    </div>
    <div class = "bodyitem3">
        <h1>how to play</h1>
    </div>
    <div class = "bodyitem3">
        <h1>how to dance</h1>
    </div>
    <div class="bodymore3">
        <img src="img/shapes1.jpg" style="width:110%;height:200px">
        <div class="centered2"><h1>fun with family</h1></div>
    </div>
</div>

<style>
    html {
        background-color: red; 
        background-image: radial-gradient(gray, black);
    }
    .holder {
    position: relative;
    width: 200px;
    height: 40px;
    }
    .clip {
    /* Clip edges, as some of the lines don't terminate nicely. */
    overflow: hidden;
    }
    .ellipse {
    position: absolute;
    background: radial-gradient(ellipse, transparent, transparent 7px, black 7px, black 10px, transparent 11px);
    background-size: 36px 40px;
    width: 200px;
    height: 20px;
    }
    .ellipse2 {
    top: 20px;
    left: 18px;
    background-position: 0px -20px;
    }

    .header {
        display: flex;
        columns: 6;
        column-gap: 5%;
        height: 80px;
    }
    .headeritem {
        background-color: gray;
        border-style: solid;
        width: 100%;
        text-align: center;
    }

    .body {
        display: grid;
        grid-template-columns: 10% 10% 10% 10% 10% 20%;
        grid-gap: 5%;
        height: 80px;
        vertical-align: middle;
    }
    .bodyitem {
        border-radius: 50px;
        background-color: gray;
        border-style: solid;
        width: 100%;
        text-align: center;
        vertical-align: middle;
    }
    .body .bodyitem h1{
        vertical-align: middle;
    }
    .body .bodymore {
        grid-column: auto / span 2;
        width: 100%;
        text-align: center;
        
    }
    .body .bodymore h1{
        vertical-align: middle;
        font-family: 'Cedarville Cursive', cursive;
        font-size: 100px;
        padding:0px;
        margin:0px;
        border:0px;
        width:100%;
        height: 80px;
    }

    .body2 {
        display: grid;
        grid-template-columns: 15% 15% 15% 20% 20%;
        grid-gap: 2%;
        height: 80px;
        vertical-align: middle;
    }
    .bodyitem2 {
        border-radius: 50px;
        background-color: gray;
        border-style: solid;
        width: 100%;
        height: 45%;
        text-align: center;
        vertical-align: middle;
    }
    .body2 .bodyitem2 h1{
        vertical-align: middle;
    }
    .body2 .bodymore2 {
        grid-column: auto / span 2;
        width: 100%;
        text-align: center;
    }
    .body2 .bodymore2 .centered h1{
        position: relative;
        top: 85%;
        left: 90%;
        transform: translate(-85%, -90%);
        vertical-align: middle;
        font-family: 'Cedarville Cursive', cursive;
        font-size: 80px;
        padding:0px;
        margin:0px;
        border:0px;
        width:100%;
    }

    .body3 {
        display: grid;
        grid-template-columns: 15% 15% 15% 20% 20%;
        grid-gap: 2%;
        height: 80px;
        vertical-align: middle;
    }
    .bodyitem3 {
        border-radius: 50px;
        background-color: gray;
        border-style: solid;
        width: 100%;
        height: 95%;
        text-align: center;
        vertical-align: middle;
    }
    .body3 .bodyitem3 h1{
        vertical-align: middle;
    }
    .body3 .bodymore3 {
        grid-column: auto / span 2;
        width: 100%;
        height: 0;
        text-align: center;
    }
    .body3 .bodymore3 .centered2 h1{
        position: relative;
        top: -50%;
        left: 0%;
        transform: translate(5%, -150%);
        vertical-align: middle;
        font-family: 'Cedarville Cursive', cursive;
        font-size: 60px;
        padding:0px;
        margin:0px;
        border:0px;
        width:100%;
    }
</style>
<!--see if you could put it all on a grid system
    the centered class font approach is acting wierd
    add space above slide show 
    make a more squigly line
    make background of images transparent
    try gradient background
-->




</html>
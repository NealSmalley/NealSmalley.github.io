<?php
    include 'header.php';
?>
<h1>This is Neal's super awesome website</h1>
<form action= "search.php" method= "Post">
    <input type="text" name="search" placeholder="Search">
    <button type= "submit" name="submit-search">Search</button>
</form>


<!DOCTYPE html> 
<html>
<head>
<title>My page!</title>
<?php include 'header.php';?><style><?php include 'CSS/p&fstyle.css';?></style>
<div id="app"></div>
</head>
<body>
  <header>
    <nav>
<ul>
  <li><a href = "index.php">home</a></li>
  <li><a href = "">season 1</a>
      <ul>
          <li><a>1-15</a></li>
          <li><a>16-30</a></li>
          <li><a>31-47</a></li>
      </ul>
  </li>
  <li class= "desktop"><a href = "">season 2</a>
    <ul>
      <li><a>1-20</a></li>
      <li><a>21-40</a></li>
      <li><a>41-65</a></li>
    </ul>
  </li>
  <li class= "desktop"><a href = "">season 3</a>
    <ul>
      <li><a>1-20</a></li>
      <li><a>21-40</a></li>
      <li><a>41-62</a></li>
    </ul>
  </li>
  <li class= "desktop"><a href = "">season 4</a>
    <ul>
      <li><a>1-15</a></li>
      <li><a>16-30</a></li>
      <li><a>31-48</a></li>
    </ul>
  </li>
  <li><form action= "search.php" method= "Post"> <input type="text" name="search" placeholder="Search"> <button type= "submit" name="submit-search">Search</button> </form></li>
</ul>

    </nav>
  </header>
<!-- Slide Show -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * {box-sizing: border-box}
  body {font-family: Verdana, sans-serif; margin:0}
  .mySlides {display: none}
  img {vertical-align: middle;}
  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }
  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }
  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  .active, .dot:hover {
    background-color: #717171;
  }
  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }
  @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
  }
  </style>
  </head>
  <body>
  
  <div class="slideshow-container">
  
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <video width="740" height="580" controls>
    <source src="img/bane.mp4" type="video/mp4">
    </video>
    <div class="text">Custom Covid-19 bane mask</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img/Ice cream.jpg" style="width:100%">
    <div class="Ice cream">Caption Two</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img/Ice cream.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
  </div>
  
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
    dots[slideIndex-1].className += " active";
  }
  </script>
  
  </body>


  <section class="features">
    <figure>
      <img src="img/typinghand.jpg" alt="the typinghand">
      <figcaption>Typinghand project</figcaption>
    </figure>
    <figure>
      <img src="img/shuttle.jpg" alt="Star trek space shuttle">
      <figcaption>star trek space shuttle trailer</figcaption>
    </figure>
    <figure>
      <img src="img/filler.jpeg" alt="self repairing car">
      <figcaption>self repairing car</figcaption>
    </figure>
  </section>



  <section>triple-section</section>
  <footer>

    Neal Smalley
  </footer>
</body>
</html> 

<h2>All Projects:</h2>
<div class="aritcle-container">
    <?php
        $sql = "SELECT * FROM article";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
        
        if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                    echo "<div>
                        <h3>".$row['a_title']."</h3>
                        <p>".$row['a_text']."</p>
                        <p>".$row['a_date']."</p>
                        <p>".$row['a_author']."</p>
                    </div>";
            }
            
        }


    ?>
</div>


</body>
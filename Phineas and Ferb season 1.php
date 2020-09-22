<?php
    include 'header.php';
?>
<h1>This is Neal's super awesome website</h1>
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
  <li><a href = "Phineas and Ferb season 1.php">season 1</a>
      <ul>
          <li><a href = "eps/1-15.php">1-15</a></li>
          <li><a href = "eps/16-30.php">16-30</a></li>
          <li><a href = "eps/31-47.php">31-47</a></li>
      </ul>
  </li>
  <li class= "desktop"><a href = "Phineas and Ferb season 2.php">season 2</a>
    <ul>
      <li><a href = "eps/2(1-20).php">1-20</a></li>
      <li><a href = "eps/2(21-40).php">21-40</a></li>
      <li><a href = "eps/2(41-65).php">41-65</a></li>
    </ul>
  </li>
  <li class= "desktop"><a href = "Phineas and Ferb season 3.php">season 3</a>
    <ul>
      <li><a href = "eps/3(1-20).php">1-20</a></li>
      <li><a href = "eps/3(21-40).php">21-40</a></li>
      <li><a href = "eps/3(41-62).php">41-62</a></li>
    </ul>
  </li>
  <li class= "desktop"><a href = "Phineas and Ferb season 4.php">season 4</a>
    <ul>
      <li><a href = "eps/4(1-15).php">1-15</a></li>
      <li><a href = "eps/4(16-30).php">16-30</a></li>
      <li><a href = "eps/4(31-48).php">31-48</a></li>
    </ul>
  </li>
  <li>
    <!--<form action= "search.php" method= "Post"><input type="text" name="search" placeholder="Search"><button type= "submit" name="submit-search">Search</button></form>-->
    <head>
      <!--<link rel="stylesheet" href="pro search bar/css/style.css" />-->
      <style type="text/css">
        #searchBar {
            margin-top: 40px;
            border: 1px solid #000000;
            border-right: none;
            font-size: 16px;
            padding: 10px;
            outline: none;
            width:150px;
            -webkit-border-top-left-radius: 10px;
            -webkit-border-bottom-left-radius: 10px;
            -moz-border-radius-topleft: 10px;
            -moz-border-radius-bottomleft: 10px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
        #searchBtn {
            border: 1px solid #000000;
            font-size: 16px;
            padding: 10px;
            background:#f1d829;
            font-weight:bold;
            cursor: pointer;
            outline: none;
            -webkit-border-top-right-radius: 10px;
            -webkit-border-bottom-right-radius: 10px;
            -moz-border-radius-topright: 10px;
            -moz-border-radius-bottomright: 10px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        #searchBtn:hover {
            background: #f6e049;
        }
        body {
            font-family: arial;
        }
        h3 {
            margin: 20px 0px 0px
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        </style>
        <script type = "text/javascript">
            function active(){
                var searchBar = document.getElementById('searchBar');

                if(searchBar.value == 'Search...'){
                    searchBar.value = ''
                    searchBar.placeholder = 'Search...'
                }
            }
            function inactive(){
                var searchBar = document.getElementById('searchBar');

                if(searchBar.value == ''){
                    searchBar.value = 'Search...'
                    searchBar.placeholder = ''
                }
            }
        </script>
    </head>
    <body>
        <form action="search.php" method="post">
          <input type="text" id="searchBar" name="search" placeholder="Search"><button type="submit" id="searchBtn" name="submit-search">Go</button>
        </form>
    </body>
  </li>
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
      <a href="p&f(stl)/p&f racecar.stl" download>
      <img src="img_p&f/p&f_racecar.jpg" alt="race car">
      <figcaption>ep4</figcaption>
      </a>
    </figure>
    <figure>
        <a href="p&f(stl)/candacemountain.stl" download>
        <img src="img_p&f/p&f_candacemountain.jpg" alt="candacemountain">
        <figcaption>ep7</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/phineas brobot.stl" download>
        <img src="img_p&f/Phinedroid.png" alt="Phinedroid">
        <figcaption>ep8</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/ferb brobot.stl" download>
        <img src="img_p&f/p&f_ferbot.jpg" alt="Ferbot">
        <figcaption>ep8</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/s'winter machine.stl" download>
        <img src="img_p&f/s'winter machine.jpg" alt="s'winter machine">
        <figcaption>ep11</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/PTP-ALL_Parts_v1.stl" download>
        <img src="img_p&f/perry toy.jpg" alt="perry toy">
        <figcaption>ep16 credit:https://www.thingiverse.com/thing:29927/files</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/monster truck.stl" download>
        <img src="img_p&f/p&f_monster truck.jpg" alt="monster truck">
        <figcaption>ep18</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/monster truck.stl" download>
        <img src="img_p&f/p&f_monster truck.jpg" alt="monster truck">
        <figcaption>ep19 incomplete mom's birthday</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/submarine.stl" download>
        <img src="img_p&f/submarine.jpg" alt="submarine">
        <figcaption>ep20</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/time machine.stl" download>
        <img src="img_p&f/time machine.png" alt="time machine">
        <figcaption>ep21</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/tree house monster.stl" download>
        <img src="img_p&f/tree house monster.jpg" alt="submarine">
        <figcaption>ep23</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/pirate ship.stl" download>
        <img src="img_p&f/pirate ship.jpg" alt="submarine">
        <figcaption>ep24 incomplete</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/.stl" download>
        <img src="img_p&f/chariot race.jpg" alt="submarine">
        <figcaption>ep25 was never made</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/tree house monster.stl" download>
        <img src="img_p&f/water slide.jpg" alt="submarine">
        <figcaption>ep26 water slide incomplete</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/roller rink.stl" download>
        <img src="img_p&f/roller derby.jpg" alt="submarine">
        <figcaption>ep27 roller rink</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/submarine2.stl" download>
        <img src="img_p&f/Submarine2.jpg" alt="submarine">
        <figcaption>ep30 submarine2</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/bowling ball.stl" download>
        <img src="img_p&f/bowling ball.jpg" alt="submarine">
        <figcaption>ep33 bowling ball</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/f games.stl" download>
        <img src="img_p&f/f games.jpg" alt="submarine">
        <figcaption>ep34 f games</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/observatory(1).stl" download>
        <img src="img_p&f/observatory.jpg" alt="submarine">
        <figcaption>ep35 observatory</figcaption>
        </a>
    </figure>
    <figure>
        <a href="tree house monster.stl" download>
        <img src="img_p&f/miniature golf.jpg" alt="submarine">
        <figcaption>ep36 miniature golf incomplete</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/dual portals.stl" download>
        <img src="img_p&f/dual portals.jpg" alt="submarine">
        <figcaption>ep37 dual portals</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/flying fishmonger.stl" download>
        <img src="img_p&f/flying fishmonger.jpg" alt="submarine">
        <figcaption>ep38 flying fishmonger(not my best work)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/haunted house.stl" download>
        <img src="img_p&f/haunted house.jpg" alt="submarine">
        <figcaption>ep39 haunted house</figcaption>
        </a>
    </figure>
    <figure>
        <a href="tree house monster.stl" download>
        <img src="img_p&f/rainbow ray.jpg" alt="submarine">
        <figcaption>ep43 rainbow ray (never made?)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/rocket ship.stl" download>
        <img src="img_p&f/rocket ship.jpg" alt="submarine">
        <figcaption>ep44 rocket ship</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/rotating bed.stl" download>
        <img src="img_p&f/rotating bed.jpg" alt="submarine">
        <figcaption>ep45 rotating bed</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/flying car of the future.stl" download>
        <img src="img_p&f/flying car of the future.jpg" alt="submarine">
        <figcaption>ep45 flying car of the future</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/platform.stl" download>
        <img src="img_p&f/platform.jpg" alt="submarine">
        <figcaption>ep45 flying car of the future platform</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/portal to mars.stl" download>
        <img src="img_p&f/portal to mars.jpg" alt="submarine">
        <figcaption>ep46 portal to mars</figcaption>
        </a>
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
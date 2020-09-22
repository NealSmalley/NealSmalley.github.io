<?php
    include 'header.php';
?>
<h1><center>phineas and ferb season 4</center></h1>
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
    <img src="img_p&f/wierd ride stl.png" style="width:100%">
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
      <img src="img_p&f/hockey z9.jpg" alt="race car">
      <figcaption>ep1 hockey z9</figcaption>
      </a>
    </figure>
    <figure>
        <a href="p&f(stl)/new years ball.stl" download>
        <img src="img_p&f/new years ball.jpg" alt="candacemountain">
        <figcaption>ep2 new years ball</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/fly machine.stl" download>
        <img src="img_p&f/fly machine.jpg" alt="Phinedroid">
        <figcaption>ep3 fly machine(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/tooth amusement.stl" download>
        <img src="img_p&f/tooth amusement ride.jpg" alt="Ferbot">
        <figcaption>ep4 tooth amusement ride</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/nedlington nymph.stl" download>
        <img src="img_p&f/nedlington nymph.jpg" alt="s'winter machine">
        <figcaption>ep5 nedlington nymph</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/rutabaga vehicles.stl" download>
        <img src="img_p&f/rutabaga vehicles.jpg" alt="perry toy">
        <figcaption>ep6 rutabaga vehicles(more stuff)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/infinite probability generator.stl" download>
        <img src="img_p&f/infinite probability generator.jpg" alt="monster truck">
        <figcaption>ep8 infinite probability generator</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/monster truck.stl" download>
        <img src="img_p&f/mind share device.jpg" alt="monster truck">
        <figcaption>ep9 mind share device</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/submarine.stl" download>
        <img src="img_p&f/backyard hodge podge.jpg" alt="submarine">
        <figcaption>ep10 backyard hodge podge(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/waiting pool.stl" download>
        <img src="img_p&f/waiting pool.jpg" alt="time machine">
        <figcaption>ep11 waiting pool</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/tree house monster.stl" download>
        <img src="img_p&f/ball of water.jpg" alt="submarine">
        <figcaption>ep13 ball of water(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/dog helmet.stl" download>
        <img src="img_p&f/dog helmet.jpg" alt="submarine">
        <figcaption>ep14 dog helmet</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/climbing wall.stl" download>
        <img src="img_p&f/climbing wall.jpg" alt="submarine">
        <figcaption>ep17 climbing wall</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/chubacabra copter.stl" download>
        <img src="img_p&f/chubacabra copter.jpg" alt="submarine">
        <figcaption>ep18 chubacabra copter</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/laser device.stl" download>
        <img src="img_p&f/laser device.jpg" alt="submarine">
        <figcaption>ep20 laser device(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/obstacle course.stl" download>
        <img src="img_p&f/obstacle course.jpg" alt="submarine">
        <figcaption>ep21 obstacle course(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/super power machine.stl" download>
        <img src="img_p&f/super power machine.jpg" alt="submarine">
        <figcaption>ep22 super power machine(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/wood t-rex.stl" download>
        <img src="img_p&f/wood t-rex.png" alt="submarine">
        <figcaption>ep24 wood t-rex</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/troy kingdom.stl" download>
        <img src="img_p&f/troy kingdom.jpg" alt="submarine">
        <figcaption>ep24 troy kingdom<(placeholder)/figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/troy vehicles.stl" download>
        <img src="img_p&f/troy vehicles.jpg" alt="submarine">
        <figcaption>ep24 troy vehicles(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/super soakers.stl" download>
        <img src="img_p&f/super soakers.jpg" alt="submarine">
        <figcaption>ep26 super soakers</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/foam loop.stl" download>
        <img src="img_p&f/foam loop.jpg" alt="submarine">
        <figcaption>ep27 foam loop(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/future popcorn machine.stl" download>
        <img src="img_p&f/future popcorn machine.png" alt="submarine">
        <figcaption>ep28 future popcorn machine(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/flying fishmonger.stl" download>
        <img src="img_p&f/scrap book.jpg" alt="submarine">
        <figcaption>ep28 scrap book(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/chores machine.stl" download>
        <img src="img_p&f/chores machine.jpg" alt="submarine">
        <figcaption>ep29 steam metal detector</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/chores machine.stl" download>
        <img src="img_p&f/chores machine.jpg" alt="submarine">
        <figcaption>ep29 chores machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/telephone poles.stl" download>
        <img src="img_p&f/telephone poles.jpg" alt="submarine">
        <figcaption>ep30 telephone poles(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/rethreading zipline.stl" download>
        <img src="img_p&f/rethreading zipline.jpg" alt="submarine">
        <figcaption>ep30 rethreading zipline</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/batting cage.stl" download>
        <img src="img_p&f/batting cage.jpg" alt="submarine">
        <figcaption>ep31 batting cage</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/double helix pool.stl" download>
        <img src="img_p&f/double helix pool.jpg" alt="submarine">
        <figcaption>ep32 double helix pool</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/planet rockets.stl" download>
        <img src="img_p&f/planet rockets.jpg" alt="submarine">
        <figcaption>ep33 planet rockets(ownpage,placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/biplane.stl" download>
        <img src="img_p&f/biplane.jpg" alt="submarine">
        <figcaption>ep34 biplane(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/wind amplifier.stl" download>
        <img src="img_p&f/wind amplifier.jpg" alt="submarine">
        <figcaption>ep35 wind amplifier</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/giant marionette puppet.stl" download>
        <img src="img_p&f/giant marionette puppet.jpg" alt="submarine">
        <figcaption>ep36 giant marionette puppet</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/portal to mars.stl" download>
        <img src="img_p&f/giant picnic.png" alt="submarine">
        <figcaption>ep37 giant picnic(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/takeout stuff structure.stl" download>
        <img src="img_p&f/takeout stuff structure.jpg" alt="submarine">
        <figcaption>ep39 takeout stuff structure(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/blue berry air.stl" download>
        <img src="img_p&f/blue berry air.png" alt="submarine">
        <figcaption>ep40 blue berry air</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/tatooine vaporator.stl" download>
        <img src="img_p&f/tatooine vaporator.jpg" alt="submarine">
        <figcaption>ep41 tatooine vaporator(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/sith inator.stl" download>
        <img src="img_p&f/sith inator.jpg" alt="submarine">
        <figcaption>ep41 sith inator</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/z-ray machine.stl" download>
        <img src="img_p&f/z-ray machine.jpg" alt="submarine">
        <figcaption>ep42 z-ray machine(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/solar system race.stl" download>
        <img src="img_p&f/solar system race.png" alt="submarine">
        <figcaption>ep43 solar system race(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/rubberising machine.stl" download>
        <img src="img_p&f/rubberising machine.jpg" alt="submarine">
        <figcaption>ep44 rubberising machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/hover board.stl" download>
        <img src="img_p&f/hover boards.jpg" alt="submarine">
        <figcaption>ep48 hover boards</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/time catapult.stl" download>
        <img src="img_p&f/time catapult.png" alt="submarine">
        <figcaption>ep48 time catapult</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/weird ride.stl" download>
        <img src="img_p&f/weird ride.jpg" alt="submarine">
        <figcaption>ep48 weird ride</figcaption>
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
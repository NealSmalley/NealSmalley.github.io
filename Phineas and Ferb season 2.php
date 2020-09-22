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
      <a href="p&f(stl)/water base.stl" download>
      <img src="img_p&f/waterbase.jpg" alt="waterbase">
      <figcaption>ep1 waterbase</figcaption>
      </a>
    </figure>
    <figure>
        <a href="p&f(stl)/animal translator.stl" download>
        <img src="img_p&f/animal translator.jpg" alt="candacemountain">
        <figcaption>ep2 animal translator(could be improved)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/aglet stage.stl" download>
        <img src="img_p&f/aglet.jpg" alt="aglet stage">
        <figcaption>ep3 aglet stage</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/ferb brobot.stl" download>
        <img src="img_p&f/ferb's chemistry set.jpg" alt="chemistry set">
        <figcaption>ep4 ferb's chemistry set</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/aquarium.stl" download>
        <img src="img_p&f/aquarium.jpg" alt="aquarium">
        <figcaption>ep5 aquarium</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/stiring boat.stl" download>
        <img src="img_p&f/gelatin boat stand in.jpg" alt="stiring boat">
        <figcaption>ep6 stiring boat (stand in photo)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/monster truck.stl" download>
        <img src="img_p&f/british water slide.jpg" alt="british water slide">
        <figcaption>ep7 british water slide(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/carnival rocket ride.stl" download>
        <img src="img_p&f/carnival rocket ride.jpg" alt="carnival rocket ride">
        <figcaption>ep8 carnival rocket ride</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/platypus resturant.stl" download>
        <img src="img_p&f/platypus resturant.jpg" alt="platypus resturant">
        <figcaption>ep9 platypus resturant</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/platypus butt.stl" download>
        <img src="img_p&f/platypus butt.jpg" alt="platypus butt">
        <figcaption>ep10 platypus butt </figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/video game machine.stl" download>
        <img src="img_p&f/video game machine.jpg" alt="video game machine">
        <figcaption>ep11 video game machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/pirate ship.stl" download>
        <img src="img_p&f/baseball gun.jpg" alt="baseball gun">
        <figcaption>ep12 baseball gun(never made)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/pirate ship.stl" download>
        <img src="img_p&f/meap's new space ship.jpg" alt="meap ship">
        <figcaption>ep12 meap ship incomplete</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/pirate ship.stl" download>
        <img src="img_p&f/pirate ship.jpg" alt="robot hand">
        <figcaption>ep12 robot hand(missing)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/pirate ship.stl" download>
        <img src="img_p&f/evil ship.png" alt="evil ship">
        <figcaption>ep12 evil ship incomplete</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/.stl" download>
        <img src="img_p&f/fort.jpg" alt="p&f fort">
        <figcaption>ep13 p&f fort</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/thadius and thor fort.stl" download>
        <img src="img_p&f/thaddeus and thor fort.jpg" alt="th&th fort">
        <figcaption>ep13 thadius and thor fort</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/tree house monster.stl" download>
        <img src="img_p&f/plane.jpg" alt="plane">
        <figcaption>ep14 plane(never made)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/let's take a quiz stage.stl" download>
        <img src="img_p&f/let's take a quiz.jpg" alt="stage">
        <figcaption>ep15 Let's take a quiz stage</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/submarine2.stl" download>
        <img src="img_p&f/car wash.png" alt="car wash">
        <figcaption>ep16 car wash(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/bowling ball.stl" download>
        <img src="img_p&f/perry.png" alt="platypus pet">
        <figcaption>ep17 platypus pet</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/f games.stl" download>
        <img src="img_p&f/island house.jpg" alt="island house">
        <figcaption>ep18 island house(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/shrink machine.stl" download>
        <img src="img_p&f/shrink machine.jpg" alt="shrink machine">
        <figcaption>ep19 shrink machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="tree house monster.stl" download>
        <img src="img_p&f/cruise ship.jpg" alt="cruise ship">
        <figcaption>ep20 cruise ship(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/x-ray glasses.stl" download>
        <img src="img_p&f/x-ray glasses.png" alt="x-ray glasses">
        <figcaption>ep23 x-ray glasses</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/spa.stl" download>
        <img src="img_p&f/spa.jpg" alt="spa">
        <figcaption>ep24 spa (lots of stuff)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/flying fishmonger.stl" download>
        <img src="img_p&f/lots of stuff.jpg" alt="lots of stuff">
        <figcaption>ep25(lots of stuff incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/ubble machine.stl" download>
        <img src="img_p&f/bubble machine.jpg" alt="bubble machine">
        <figcaption>ep27 bubble machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="tree house monster.stl" download>
        <img src="img_p&f/mix and mingle machine.jpg" alt="mix and mingle machine">
        <figcaption>ep29 incomplete mix and mingle machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/rocket ship.stl" download>
        <img src="img_p&f/merit badge coaster.png" alt="merit badge coaster">
        <figcaption>ep30 merit badge coaster(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/bully code structure.stl" download>
        <img src="img_p&f/bully code place holder.jpg" alt="bully code structure">
        <figcaption>ep31 bully code structure(place holder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/collapsible room.stl" download>
        <img src="img_p&f/collapsible room (place holder).jpg" alt="collapsible room">
        <figcaption>ep32 collapsible room</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/picture teleporter.stl" download>
        <img src="img_p&f/picture teleporter.jpg" alt="picture teleporter">
        <figcaption>ep33 picture teleporter</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/dancing exosuit.stl" download>
        <img src="img_p&f/dancing exosuit.png" alt="dancing exosuit">
        <figcaption>ep34 dancing exosuit</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/anti romance robot.stl" download>
        <img src="img_p&f/anti romance robot.png" alt="anti romance robot">
        <figcaption>ep35 anti romance robot</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/santa shop.stl" download>
        <img src="img_p&f/santa stop.jpg" alt="santa stop">
        <figcaption>ep37 santa stop</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/phasing machine.stl" download>
        <img src="img_p&f/phasing machine.png" alt="phasing machine">
        <figcaption>ep38 phasing machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/portal to mars.stl" download>
        <img src="img_p&f/ice sculputer.png" alt="ice sculputer">
        <figcaption>ep39 incomplete ice sculputer(placeholder photo)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/portal to mars.stl" download>
        <img src="img_p&f/blimp.jpg" alt="blimp">
        <figcaption>ep40 blimp(come back to)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/waterfall.stl" download>
        <img src="img_p&f/waterfall.png" alt="waterfall">
        <figcaption>ep41 waterfall(replace photo)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/anti gravity machine.stl" download>
        <img src="img_p&f/anti gravity machine.jpg" alt="waterfall">
        <figcaption>ep42 anti gravity machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/parade float.stl" download>
        <img src="img_p&f/parade car.jpg" alt="parade floats">
        <figcaption>ep43 parade floats(more stuff)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/alien space ship.stl" download>
        <img src="img_p&f/alien space ship.jpg" alt="alien space ship">
        <figcaption>ep44 alien space ship</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/rocket ride.stl" download>
        <img src="img_p&f/rocket ride.jpg" alt="rocket ride">
        <figcaption>ep45 rocket ride(more stuff)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/portal to mars.stl" download>
        <img src="img_p&f/tops of doom.jpg" alt="tops of doom">
        <figcaption>ep47 tops of doom(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/portal to mars.stl" download>
        <img src="img_p&f/yogurt machine.jpg" alt="=yogurt machine">
        <figcaption>ep48 yogurt machine(photo place holder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/robot rodeo.stl" download>
        <img src="img_p&f/robot rodeo.jpg" alt="robot rodeo">
        <figcaption>ep49 robot rodeo</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/portal to mars.stl" download>
        <img src="img_p&f/the beak.jpg" alt="the beak">
        <figcaption>ep50 the beak(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/old town.stl" download>
        <img src="img_p&f/portal to mars.jpg" alt="old town">
        <figcaption>ep51 old town(needs photo)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/lemonade machine.stl" download>
        <img src="img_p&f/lemonade machine.jpg" alt="lemonade machine">
        <figcaption>ep52 lemonade machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/jump rope robot.stl" download>
        <img src="img_p&f/jump rope robot.jpg" alt="jump rope robot">
        <figcaption>ep54 jump rope robot</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/plane.stl" download>
        <img src="img_p&f/plane.png" alt="plane">
        <figcaption>ep54 plane</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/big unicycle.stl" download>
        <img src="img_p&f/portal to mars.jpg" alt="unicycle">
        <figcaption>ep56 unicycle needs photo</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/maze.stl" download>
        <img src="img_p&f/portal to mars.jpg" alt="maze">
        <figcaption>ep57 maze(needs photo)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/robot helmet.stl" download>
        <img src="img_p&f/robot helmet.jpg" alt="robot helmets">
        <figcaption>ep58 robot helmets</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/portal to mars.stl" download>
        <img src="img_p&f/all terrain vehicle.jpg" alt="all terrain vehicle">
        <figcaption>ep59 all terrain vehicle(come back to)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/portal to mars.stl" download>
        <img src="img_p&f/tallest building.jpg" alt="tallest building">
        <figcaption>ep60 tallest building(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/split device.stl" download>
        <img src="img_p&f/split device.jpg" alt="split device">
        <figcaption>ep61 split device</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/big jukebox.stl" download>
        <img src="img_p&f/big jukebox.png" alt="split device">
        <figcaption>ep64 big juke box</figcaption>
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
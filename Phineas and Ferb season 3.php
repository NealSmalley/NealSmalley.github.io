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
      <a href="p&f(stl)/biosphere.stl" download>
      <img src="img_p&f/biosphere.jpg" alt="waterbase">
      <figcaption>ep1 biosphere</figcaption>
      </a>
    </figure>
    <figure>
        <a href="p&f(stl)/split device.stl" download>
        <img src="img_p&f/split device.jpg" alt="candacemountain">
        <figcaption>ep2 spliting machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/shoes.stl" download>
        <img src="img_p&f/fast shoes.jpg" alt="aglet stage">
        <figcaption>ep3 shoes</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/hot air balloons.stl" download>
        <img src="img_p&f/hot airballoon.jpg" alt="chemistry set">
        <figcaption>ep4 hot air balloon(ownpage)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/shark machine.stl" download>
        <img src="img_p&f/shark machine.jpg" alt="stiring boat">
        <figcaption>ep6 robot shark</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/monster truck.stl" download>
        <img src="img_p&f/moon farm.jpg" alt="british water slide">
        <figcaption>ep7 spaceship (placeholder lookfor)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/supercomputer.stl" download>
        <img src="img_p&f/supercomputer.jpg" alt="carnival rocket ride">
        <figcaption>ep8 supercomputer</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/platypus resturant.stl" download>
        <img src="img_p&f/funhouse.jpg" alt="platypus resturant">
        <figcaption>ep9 fun house incomplete(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/phone.stl" download>
        <img src="img_p&f/phone.jpg" alt="platypus butt">
        <figcaption>ep10 phone</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/magic carpet.stl" download>
        <img src="img_p&f/magic carpet.jpg" alt="video game machine">
        <figcaption>ep11 magic carpet</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/opening house.stl" download>
        <img src="img_p&f/magic carpet.jpg" alt="video game machine">
        <figcaption>ep11 opening house(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/hair growth machine.stl" download>
        <img src="img_p&f/hair growth machine.jpg" alt="baseball gun">
        <figcaption>ep12 hair growth machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/discobolus.stl" download>
        <img src="img_p&f/discobolus.jpg" alt="baseball gun">
        <figcaption>ep12 discobolus(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/bounce house.stl" download>
        <img src="img_p&f/bounce house.jpg" alt="meap ship">
        <figcaption>ep13 bounce house</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/junk slide.stl" download>
        <img src="img_p&f/junk slide.jpg" alt="robot hand">
        <figcaption>ep14 junk slide(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/hopper popper.stl" download>
        <img src="img_p&f/hopper popper.jpg" alt="evil ship">
        <figcaption>ep15 hopper popper</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/stratospheric ionizer.stl" download>
        <img src="img_p&f/stratospheric ionizer.jpg" alt="p&f fort">
        <figcaption>ep16 stratospheric ionizer</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/truck stop.stl" download>
        <img src="img_p&f/truck stop.jpg" alt="th&th fort">
        <figcaption>ep17 truck stop</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/bikes.stl" download>
        <img src="img_p&f/bikes.jpg" alt="plane">
        <figcaption>ep18 bikes(more stuff)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/fedora (1).stl" download>
        <img src="img_p&f/skiddley whiffers.png" alt="stage">
        <figcaption>ep19 fedora (own page)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/jeep.stl" download>
        <img src="img_p&f/skiddley whiffers.png" alt="stage">
        <figcaption>ep19 jeep</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/let's take a quiz stage.stl" download>
        <img src="img_p&f/skiddley whiffers.png" alt="stage">
        <figcaption>ep19 unicorn</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/shoe.stl" download>
        <img src="img_p&f/skiddley whiffers.png" alt="stage">
        <figcaption>ep19 shoe</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/nose.stl" download>
        <img src="img_p&f/skiddley whiffers.png" alt="stage">
        <figcaption>ep19 nose</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/football x7.stl" download>
        <img src="img_p&f/football x7.jpg" alt="car wash">
        <figcaption>ep20 football x7(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/dart.stl" download>
        <img src="img_p&f/dart.jpg" alt="platypus pet">
        <figcaption>ep21 dart</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/escape tower.stl" download>
        <img src="img_p&f/escape tower.jpg" alt="island house">
        <figcaption>ep24 escape tower</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/potatoe machine.stl" download>
        <img src="img_p&f/potatoe machine.jpg" alt="shrink machine">
        <figcaption>ep25 potatoe machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/ornament gun.stl" download>
        <img src="img_p&f/ornament gun.jpg" alt="cruise ship">
        <figcaption>ep27 ornament gun(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/old car.stl" download>
        <img src="img_p&f/old car.jpg" alt="x-ray glasses">
        <figcaption>ep28 old car</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/Terracotta warrior.stl" download>
        <img src="img_p&f/terracotta warrior.jpg" alt="spa">
        <figcaption>ep29 Terracotta warrior(incomplete)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/neural device.stl" download>
        <img src="img_p&f/neural device.jpg" alt="lots of stuff">
        <figcaption>ep32 neural device</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/ubble machine.stl" download>
        <img src="img_p&f/ant farm.jpg" alt="bubble machine">
        <figcaption>ep33 ant farm growth pot(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/cheesetopia.stl" download>
        <img src="img_p&f/cheesetopia.jpg" alt="mix and mingle machine">
        <figcaption>ep34 cheesetopia</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/perrytronic.stl" download>
        <img src="img_p&f/perrytronic.jpg" alt="merit badge coaster">
        <figcaption>ep35 perrytronic</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/anti gravity machine (1).stl" download>
        <img src="img_p&f/anti gravity machine2.jpg" alt="bully code structure">
        <figcaption>ep37 anti gravity machine(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/ice house.stl" download>
        <img src="img_p&f/ice house.jpg" alt="collapsible room">
        <figcaption>ep38 ice house(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/warp generator.stl" download>
        <img src="img_p&f/warp generator.jpg" alt="picture teleporter">
        <figcaption>ep40 warp generator</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/giant pillow fight.stl" download>
        <img src="img_p&f/cuteness equipment.jpg" alt="dancing exosuit">
        <figcaption>ep41 giant pillow fight</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/cuteness equipment.stl" download>
        <img src="img_p&f/cuteness equipment.jpg" alt="dancing exosuit">
        <figcaption>ep41 cuteness equipment</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/octopus rollercoaster.stl" download>
        <img src="img_p&f/octopus rollercoaster.jpg" alt="anti romance robot">
        <figcaption>ep42 octopus rollercoaster</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/water tubes.stl" download>
        <img src="img_p&f/water tubes.jpg" alt="santa stop">
        <figcaption>ep43 water tubes(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/mom attractor.stl" download>
        <img src="img_p&f/mom attractor.png" alt="phasing machine">
        <figcaption>ep44 mom attractor(optional)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/brain helmet.stl" download>
        <img src="img_p&f/brain helmet.jpg" alt="ice sculputer">
        <figcaption>ep45 brain helmet</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/leaf machine.stl" download>
        <img src="img_p&f/boat.jpg" alt="blimp">
        <figcaption>ep47 leaf machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/boat (3).stl" download>
        <img src="img_p&f/boat.jpg" alt="blimp">
        <figcaption>ep48 incomplete boat</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/jetpack.stl" download>
        <img src="img_p&f/jetpack.jpg" alt="waterfall">
        <figcaption>ep49 jetpack</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/flying.stl" download>
        <img src="img_p&f/flying saucer.jpg" alt="waterfall">
        <figcaption>ep50 flying saucer(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/parade float.stl" download>
        <img src="img_p&f/iron penny bank.jpg" alt="parade floats">
        <figcaption>ep52 incomplete iron penny bank(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/liquid machine (1).stl" download>
        <img src="img_p&f/liquid machine.jpg" alt="alien space ship">
        <figcaption>ep53 liquid machine</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/nanobots.stl" download>
        <img src="img_p&f/nanobots.jpg" alt="rocket ride">
        <figcaption>ep54 nanobots(placeholder)</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/unconventional vehicle.stl" download>
        <img src="img_p&f/unconventional vehicle.jpg" alt="tops of doom">
        <figcaption>ep55 unconventional vehicle</figcaption>
        </a>
    </figure>
    <figure>
        <a href="p&f(stl)/spring.stl" download>
        <img src="img_p&f/spring.jpg" alt="=yogurt machine">
        <figcaption>ep58 spring</figcaption>
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
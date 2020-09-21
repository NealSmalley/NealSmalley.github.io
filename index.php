<?php
    include 'header.php';
?>
<div id="header"><h1>NealTech</h1></div>
<!--<form action= "search.php" method= "Post">
    <input type="text" name="search" placeholder="Search">
    <button type= "submit" name="submit-search">Search</button>
</form>-->
<!DOCTYPE html> 
<html>
<head>
<!--
  logo middle no top
  logo first title no top
-->
<title>My page!</title>
<?php include 'header.php';?><style><?php include 'CSS/style.css';?></style>
<div id="app"></div>
</head>
<body>
<div class = bigheaderFont>
  <div class = headerFont>
      <a href="">FONTS</a>
      <a href="">SCOUTS</a>
      <a href="">PROJECTS</a>
      <a href="">SCHOOL</a>
  </div>
  <div class = bodyleftFont>
    <h2>NEALTECH</h2>
    <p>This website is about all my acomplishments</p>
  </div>
  <div class = bodyrightFont>
    <p>This page was created in 2018 and has been under lots of changes.</p>
  </div>
</div>
<div class = bigheaderFlatDesign>
  <div class = headerFlatDesign>
      <a href="">FONTS</a>
      <a href="">SCOUTS</a>
      <a href="">PROJECTS</a>
      <a href="">SCHOOL</a>
  </div>
  <div class = bodyleftFlatDesign>
    <h2>NEALTECH</h2>
    <img src="img/flat design.png" style="width:100%">
  </div>
  <div class = bodyrightFlatDesign>
    <p>This page was created in 2018 and has been under lots of changes.</p>
  </div>
</div>

<div class = bigheaderRealism>
  <div class = headerRealism>
      <a href="">FONTS</a>
      <a href="">SCOUTS</a>
      <a href="">PROJECTS</a>
      <a href="">SCHOOL</a>
  </div>
  <div class = bodyRealism>
    <img src="img/profile abstract cartoon.PNG">
    <img src="img/profile oil paint.PNG">
    <p>Welcome the Realism version of the home page!</p>
  </div>
</div>

<div class = bigheaderFreehand>
  <div class = headerFreehand>
      <a href="">FONTS</a>
      <a href="">SCOUTS</a>
      <a href="">PROJECTS</a>
      <a href="">SCHOOL</a>
  </div>
  <div class = bodyleftFreehand>
    <h2>NEALTECH</h2>
    <img src="img/Freehand.jpg" style="width:100%">
  </div>
  <div class = bodyrightFreehand>
    <p>This page was created in 2018 and has been under lots of changes.</p>
  </div>
</div>


</div>
  <div class = header>
    <header>
    <nav>
    <ul>
        <li><test><img src="img/nealslogo.jpg" style="width:80%"><a id="myImage" href = "index.html"><img src="img/nealslogo.jpg" style="width:50%">home</a></test></li>
        <li><a href = "menu.html">scouts</a>
            <ul>
                <li><a>Eagle Scout</a></li>
                <li><a>All The Merit Badges</a></li>
                <li><a>Hornaday</a></li>
            </ul>
        </li>
        <!--<li class="mobile"><a href = "pages/locations.html">projects</a>-->
        <li id="logo"><a href = "index.html"><img src="img/nealslogo.jpg" style="width:100%"></a></li>

        <li class= "desktop"><a href = "pages/locations.html">projects</a>
          <ul>
            <li><a>Eagle Scout</a></li>
            <li><a href= "Phineas and Ferb.php">Phineas and Ferb challenge</a></li>
            <li><a>Hornaday</a></li>
          </ul>
        </li>
        <li class= "desktop"><a href = "pages/contact.html">school</a>
          <ul>
            <li><a>Eagle Scout</a></li>
            <li><a>All The Merit Badges</a></li>
            <li><a>Hornaday</a></li>
          </ul>
        </li>
        </ul>
        <script>
      
          //realism
          //Fonts
          //Flat Design
          //Freehand
          //Combination
      function changeColor(){
        var link = "index.html";
        var newColor = document.getElementById('colorPicker').value;
        document.getElementById('myImage').setAttribute("href",link);
        document.getElementById('myImage').innerHTML= newColor;
        document.getElementById("myImage").style.cssText = "margin-top:40px;font-size:20px;color:white;";

        /*
        var src = document.getElementById("myImage");
        var img = document.createElement("img");
        img.src = "img/nealslogo.jpg";
        if (newColor == "NEALTECH") {
          //src.appendChild(img);

        } else {
          x.style.display = "none";
        }
        
        var x = document.getElementById("home");
        if (x.style.display == "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
        */

        if (newColor !== "Original") {
        document.getElementsByClassName('header')[0].style.display = 'none';
        [].forEach.call(document.querySelectorAll('.header'), function (el) {
        el.style.display = 'none';
        });
        }

        if (newColor == "Original") {
        document.getElementsByClassName('header')[0].style.display = 'block';
        [].forEach.call(document.querySelectorAll('.header'), function (el) {
        el.style.display = 'block';
        });
        }


        if (newColor == "Fonts") {
        document.getElementsByClassName('bigheaderFont')[0].style.display = 'block';
        [].forEach.call(document.querySelectorAll('.bigheaderFont'), function (el) {
        el.style.display = 'block';
        });
        }
        
        if (newColor !== "Fonts") {
        document.getElementsByClassName('bigheaderFont')[0].style.display = 'none';
        [].forEach.call(document.querySelectorAll('.bigheaderFont'), function (el) {
        el.style.display = 'none';
        });
        }

        if (newColor == "FlatDesign") {
        document.getElementsByClassName('bigheaderFlatDesign')[0].style.display = 'block';
        [].forEach.call(document.querySelectorAll('.bigheaderFlatDesign'), function (el) {
        el.style.display = 'block';
        });
        }
        
        if (newColor !== "FlatDesign") {
        document.getElementsByClassName('bigheaderFlatDesign')[0].style.display = 'none';
        [].forEach.call(document.querySelectorAll('.bigheaderFlatDesign'), function (el) {
        el.style.display = 'none';
        });
        }

        if (newColor == "Realism") {
        document.getElementsByClassName('bigheaderRealism')[0].style.display = 'block';
        [].forEach.call(document.querySelectorAll('.bigheaderRealism'), function (el) {
        el.style.display = 'block';
        });
        }
        
        if (newColor !== "Realism") {
        document.getElementsByClassName('bigheaderRealism')[0].style.display = 'none';
        [].forEach.call(document.querySelectorAll('.bigheaderRealism'), function (el) {
        el.style.display = 'none';
        });
        }

        if (newColor == "Freehand") {
        document.getElementsByClassName('bigheaderFreehand')[0].style.display = 'block';
        [].forEach.call(document.querySelectorAll('.bigheaderFreehand'), function (el) {
        el.style.display = 'block';
        });
        }
        
        if (newColor !== "Freehand") {
        document.getElementsByClassName('bigheaderFreehand')[0].style.display = 'none';
        [].forEach.call(document.querySelectorAll('.bigheaderFreehand'), function (el) {
        el.style.display = 'none';
        });
        }

      }
      </script>
      
          <!--var button = document.createElement("button");
          button.innerHTML = "Do Something";

          var body = document.getElementsByTagName("body")[0];
          body.appendChild(button);

          button.addEventListener ("click", function() {
            document.getElementById("home").innerHTML = "NealTech";
          });-->
        <!--<li><form action= "search.php" method= "Post"> <input type="text" name="search" placeholder="Search"> <button type= "submit" name="submit-search">Search</button> </form></li>-->
      

    </nav>
  </header>
  </div>
  <select id="colorPicker" onchange="JavaScript:changeColor()">
      <option value="Original">Original</option>
      <option value="Fonts">Fonts</option>
      <option value="FlatDesign">Flat Design</option>
      <option value="Freehand">Freehand</option>
      <option value="Realism">Realism</option>
  </select>
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

  <iframe webkitallowfullscreen="1" mozallowfullscreen="1" allowfullscreen="1" width="100%" height="500px" frameborder="0" src="//prezi.com/view/sS8ldnuwuKrUATmmgszM/embed" > 
</iframe>



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
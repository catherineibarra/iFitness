<?php
session_start();
include('/../access.php');
$isLoggedIn = isset($_SESSION['_reg']);
include('./location.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <title> Product eleven | iFitness </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA_Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- IMPORT CSS -->
  <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="../css/utilities.css">

  <!-- IMPORT FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- IMPORT VECTORS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
</head>

<body>
  <!-- NAVIGATION BAR -->
  <nav>
    <ul>
      <li class="logo"><img src="../images/logo3.png"></li>
      <div class="navbar">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../shop.php">Shop</a></li>

        <li><a href="../cart.php">My Cart</a></li>
        <?php if ($isLoggedIn) : ?>
          <li><a href="?profile=profile">My Account</a></li>
          <li><a href="?logout=logout">Logout</a></li>

        <?php else : ?>
          <li><a href="../login.php">Login</a></li>
          <li class="reg-nav"><a href="../register.php">Register</a></li>

        <?php endif; ?>

      </div>
      <li class="search-icon">
        <input type="search" placeholder="Search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </li>
    </ul>
  </nav>
  
  <!-- BODY-CONTENT -->
  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details product-container">
      <div class="left image-container">
        <div class="slideshow-container">
          <div class="main">
            <div class="mySlides fade">
              <img src="../images/111.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/110.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/112.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/113.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/114.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/115.jpg" id="zoom" alt="" />
            </div>
          </div>
          <a class="prev  fa-solid fa-arrow-left-long" onclick="plusSlides(-1)"><</a>
              <a class="next  fa-solid fa-arrow-right-long" onclick="plusSlides(1)">></a>
        </div>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          <span class="dot" onclick="currentSlide(6)"></span>

        </div>

      </div>
      <div class="right">
        <span>Strength Trainer</span>
        <h1>Fusion Push-up Workout Set<h1>
            <div class="price">$69.99</div>

            <form class="form" action="../add2cart.php" method="get">
              <input type="number" value="1" name="quantity" />
              <input type="number" value="11" name="product_id" hidden />
              <button class="addCart" type="submit" style="cursor: pointer;">Add To Cart</button>
            </form>

            <h3>Product Detail</h3>
            <p>
            Hate awkward stares and the persistent aroma of B.O. every time you go to the gym? Get a total body experience that tones and strengthens multiple muscle groups right from home – with the Fusion Motion push up board!

With the unique color-coded board guide, you’ll effortlessly target your triceps, back, shoulders and chest. Simply match the ergonomic handles to the muscle group you want to work for laser-targeted toning! Have no idea where to start? Consult our in-depth training guide with over 100 new exercises to enhance your daily routine!

But don’t just stop at sculpting the perfect upper body. Boost cardio and burn calories with our weighted ball-bearing jump rope. With 360 degrees of no-noise rotation, you’ll enjoy advanced skipping techniques to develop your quads, hammies, and glutes! And with internally locking handles, you can quickly adjust the rope to whatever length you need!

Heading out of town for a conference or much-needed vacation? Skip crowded hotel fitness rooms and bring your own portable gym! Our push-up board effortlessly folds into a compact carrier that holds all of the included fitness gear and magnetically locks to prevent spillage.

Note: The Fusion Motion back, arm and chest exerciser hold up to 265 pounds of weight.

For more great Fusion Motion exercise equipment, be sure to check out our store for the full range of products!

            </p>
      </div>
      
    </div>
  </section>


   <!-- RELATED PRODUCTS -->
   <section class="section featured">
    <div class="top container">
      <h1 class="related-h1">Related Products</h1>
      <a class="view-more" href="../shop.php">View more</a>
    </div>
    <div class="product-center container">

      <div class="product-item">
        <div class="overlay">
          <a href="pd10.php" class="product-thumb">
            <img src="../images/102.png" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Strength Trainer</span>
          <a href="pd10.php">Two Person Station Multi Gym/Station With Smith Machine</a>
          <h4>$2037</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd11.php" class="product-thumb">
            <img src="../images/111.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Strength Trainer</span>
          <a href="pd11.php">Fusion Push-up Workout Set</a>
          <h4>$69.99</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd12.php" class="product-thumb">
            <img src="../images/120.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Cardio Equipment</span>
          <a href="pd12.php">WalkingPad Foldable Treadmill</a>
          <h4>$1099</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd13.php" class="product-thumb">
            <img src="../images/130.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Thigh Toner Workout Equipment</span>
          <a href="pd13.php">Thigh Toner Workout Equipment For Women</a>
          <h4>$24.97</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      
      <div class="product-item">
        <div class="overlay">
          <a href="pd21.php" class="product-thumb">
            <img src="../images/210.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Rockit Dumbbell Rack</span>
          <a href="pd21.php">Rockit Dumbbell Rack</a>
          <h4>$702</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd22.php" class="product-thumb">
            <img src="../images/220.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Height Adjustable Chin Pull Up Bar Dip Station Weight Bench</span>
          <a href="pd22.php">Height Adjustable Chin Pull Up Bar Dip Station Weight Bench</a>
          <h4>$319.97</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd23.php" class="product-thumb">
            <img src="../images/230.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Muliti Gym 3 Station Jx930 158LBS (72KG) Stack Weights JX Fitness Home GYM</span>
          <a href="pd23.php">Jx930 158LBS (72KG) Stack Weights</a>
          <h4>$1299</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd24.php" class="product-thumb">
            <img src="../images/240.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Gym Weight Training Exercise Equipment Strength Machine</span>
          <a href="pd24.php">Gym Weight Training Exercise Equipment Strength Machine</a>
          <h4>$369.99</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
  
      <div class="product-item">
        <div class="overlay">
          <a href="pd25.php" class="product-thumb">
            <img src="../images/250.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Genki Magnetic Cross Trainer Elliptical Trainer Machine Home Gym Equipment with LED Display</span>
          <a href="pd25.php">Genki Magnetic Cross Trainer Elliptical Trainer Machine Home Gym Equipment with LED Display</a>
          <h4>$139.88</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd26.php" class="product-thumb">
            <img src="../images/260.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Genki Exercise Bike Spin Stationary Shock Absorbing Home Gym Fitness Equipment Adjustable Magnetic Resistance</span>
          <a href="pd26.php">Bike Spin Stationary Shock Absorbing</a>
          <h4>$379.97</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd27.php" class="product-thumb">
            <img src="../images/270.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>7-In-1 Weight Bench Multi-Function Power Station Fitness Gym Equipment</span>
          <a href="pd27.php">7-In-1 Weight Bench Multi-Function Power Station Fitness Gym Equipment</a>
          <h4>$150.30</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd28.php" class="product-thumb">
            <img src="../images/280.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Centra Magnetic Rowing Machine 8 Level Resistance Exercise Fitness Home Gym</span>
          <a href="pd28.php">Centra Magnetic Rowing Machine 8 Level Resistance Exercise Fitness Home Gym</a>
          <h4>$420</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd29.php" class="product-thumb">
            <img src="../images/290.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Slim Body Comprehensive Exercise Comfortable Fitness Equipment Push Up Bracket For Home Gym Easy Comprehensive Exercise Fitness Equipment For Training</span>
          <a href="pd29.php"> Push Up Bracket</a>
          <h4>$35</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd30.php" class="product-thumb">
            <img src="../images/300.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Wall Mounted Pull Up Multi Function Home Gym Exercise Fitness Indoor Exercise Equipment Gym House Fitness US STORE</span>
          <a href="pd30.php"> Wall Mounted Pull Up </a>
          <h4>$756.99</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

    </div>
  </section>
  
  <div class="center py-4">
          <a href = "#">
              <input type="submit" value="Top" name="submit" class="btn btn-secondary" />
            </a>
          </div>

  <!-- FOOTER -->
  <footer>
    <ul>
      <div class="social">
        <a href="https://github.com/catherineibarra/iFitness"><i class="fab fa-github fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-twitter fa-2x"></i></a>
      </div>

      <li>&copy; 2022 iFitness. All Rights Reserved.</li>

      <div class="navbar">
        <li><a href="not-found.html">About Us </a></li>
        <li><a href="not-found.html">Terms and Policy</a></li>
      </div>
    </ul>
  </footer>

  <!-- JS Scripts -->
  <script src="./js/index.js"></script>
    <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6" crossorigin="anonymous"></script>
    <script src="./js/zoomsl.min.js"></script>
    <script>
      $(function() {
        console.log("hello");
        $("#zoom").imagezoomsl({
          zoomrange: [4, 4],
        });
      });
  </script>

</body>
</html>
<?php
session_start();
include('/../access.php');
$isLoggedIn = isset($_SESSION['_reg']);
include('./location.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <title> Product Eight | iFitness </title>
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
          <li><a href="?profile=profile">My Account
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
              <img src="../images/8.jpg" id="zoom" alt="" />
            </div>
            <div class="mySlides fade">
              <img src="../images/8.1.jpeg" id="zoom" alt="" />
            </div>

          </div>
          <a class="prev  fa-solid fa-arrow-left-long" onclick="plusSlides(-1)"><</a>
              <a class="next  fa-solid fa-arrow-right-long" onclick="plusSlides(1)">></a>
        </div>

        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>

        </div>

      </div>
      <div class="right">
        <span>Brutaler Pump im Training</span>
        <h1>Rich Piana 5% Nutrition Freak Show<h1>
            <div class="price">$77</div>

            <form class="form" action="../add2cart.php" method="get">
              <input type="number" value="1" name="quantity" />
              <input type="number" value="8" name="product_id" hidden />
              <button class="addCart" type="submit" style="cursor: pointer;">Add To Cart</button>
            </form>

            <h3>Product Detail</h3>
            <p>
              Rich Piana 5% Nutrition Freak Show transportiere die Energie zu deinen Muskeln und ermöglicht dir ein Training wie im Film.
              Freak Show von Rich Piana 5% Nutrition optimiert das anabole Hormon Insulin, um die Speicherung von Körperfett zu verhindern.
              Es steuert den Blutzuckerspiegel und transportiert die Kohlenhydrate zu deinen Muskeln. Ganz nebenbei verspricht dir das Rich Piana 5% Nutrition Freak Show einen extremen Monster-Pump im Training.
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
          <a href="pd1.php" class="product-thumb">
            <img src="../images/8.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Whey Protein</span>
          <a href="pd1.php">Ghost 100% Whey Protein 2lb</a>
          <h4>$76.49 </h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd2.php" class="product-thumb">
            <img src="../images/2.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Scientifically formulated to be high in protein for muscle recovery</span>
          <a href="pd2.php">Musashi High Protein Chocolate 2kg</a>
          <h4>$76.49 </h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="pd3.php" class="product-thumb">
            <img src="../images/3.jpg" alt="" />
          </a>
          <span class="discount">40%</span>
        </div>
        <div class="product-info">
          <span>Excellent Supplement for the reduction of glucocorticoid hormones</span>
          <a href="pd3.php">Muscle Matrix - 60 vcaps (25mg per capsule)</a>
          <h4>$109</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="pd4.php" class="product-thumb">
            <img src="../images/4.1.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Enhanced muscle-building</span>
          <a href="pd4.php">Scream Supps Pinhead</a>
          <h4>$59.99</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      <div class="product-item">
        <div class="overlay">
          <a href="pd5.php" class="product-thumb">
            <img src="../images/5.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>ENERGY UP </span>
          <a href="pd5.php">Niversal Animal Energy</a>
          <h4>$29</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd6.php" class="product-thumb">
            <img src="../images/6.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Muscle building vitamins for men - stamina booster for men </span>
          <a href="pd6.php">Bodybuilding Pills For Men</a>
          <h4>$39</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd7.php" class="product-thumb">
            <img src="../images/7.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Explosive energy, heightened focus and an overwhelming urge to tackle any challenge</span>
          <a href="pd7.php">Cellucor C4 Original ID 60 Serves</a>
          <h4>$68.9</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd8.php" class="product-thumb">
            <img src="../images/8.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Brutaler Pump im Training</span>
          <a href="pd8.php">Rich Piana 5% Nutrition Freak Show</a>
          <h4>$79</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      
      <div class="product-item">
        <div class="overlay">
          <a href="pd9.php" class="product-thumb">
            <img src="../images/9.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Natural muscle builder </span>
          <a href="pd9.php">Muscle Builder 90 capsules</a>
          <h4>$77</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
 
      
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
          <a href="pd14.php" class="product-thumb">
            <img src="../images/140.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Fat Burner</span>
          <a href="pd14.php">EHP Labs OxyShred Thermogenic</a>
          <h4>$79.89</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      
      <div class="product-item">
        <div class="overlay">
          <a href="pd15.php" class="product-thumb">
            <img src="../images/150.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>FSHEIN Cut Out Sports Bra & Leggings</span>
          <a href="pd15.php">Sports Bra & Leggings</a>
          <h4>$169.99</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd16.php" class="product-thumb">
            <img src="../images/160.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Gym Bunny Seamless Long Sleeve Top</span>
          <a href="pd16.php">Seamless Long Sleeve Top</a>
          <h4>$102</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd17.php" class="product-thumb">
            <img src="../images/170.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>Seamless Gym Set Sport Suit Workout Sportswear Yoga Set Gym Clothing Tracksuit High Waist</span>
          <a href="pd17.php">Sport Suit Workout Sportswear</a>
          <h4>$129.99</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>
      
      <div class="product-item">
        <div class="overlay">
          <a href="pd18.php" class="product-thumb">
            <img src="../images/180.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>MP Seamless 1/4 Zip - Dark Grey Marl For Men</span>
          <a href="pd18.php">Regular fit seamless training 1/4 zip</a>
          <h4>$109</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>


      <div class="product-item">
        <div class="overlay">
          <a href="pd19.php" class="product-thumb">
            <img src="../images/190.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>MP Velocity 1/4 Zip Top - Charcoal Marl For Men</span>
          <a href="pd19.php">1/4 zip top</a>
          <h4>$179.99</h4>
        </div>
        <ul class="icons">
          <li><i class="bx bx-heart"></i></li>
          <li><i class="bx bx-search"></i></li>
          <li><i class="bx bx-cart"></i></li>
        </ul>
      </div>

      <div class="product-item">
        <div class="overlay">
          <a href="pd20.php" class="product-thumb">
            <img src="../images/201.jpg" alt="" />
          </a>
        </div>
        <div class="product-info">
          <span>MP Men's Linear Mark Graphic Training 1/4 Zip - Ice Blue</span>
          <a href="pd20.php">Graphic training 1/4 zip</a>
          <h4>$200</h4>
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

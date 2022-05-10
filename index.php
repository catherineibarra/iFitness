<?php
session_start();
include('access.php');

//if user clicks logout
if (isset($_GET['logout']) && $_GET['logout'] == "logout") :
  session_destroy();
  header("location: index.php");
  exit;
endif;
// if user clicks on profile
if (isset($_GET['profile']) && $_GET['profile'] == "profile") :
  header("location: profile.php");
  exit;
endif;
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <title> Home | iFitness </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA_Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- IMPORT CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/utilities.css">
  <link rel="stylesheet" href="css/awesome.css">

  <!-- IMPORT FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- IMPORT VECTORS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous">
</head>

<body>
  <!-- NAVIGATION BAR -->
  <nav>
    <ul>
      <li class="logo"><img src="./images/logo3.png"></li>
      <div class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>

        <li><a href="cart.php">My Cart</a></li>
        <?php if ($isLoggedIn) : ?>
          <li><a href="?profile=profile">My Account</a></li>
          <li><a href="?logout=logout">Logout</a></li>

        <?php else : ?>
          <li><a href="login.php">Login</a></li>
          <li class="reg-nav"><a href="register.php">Register</a></li>

        <?php endif; ?>

      </div>
      <li class="search-icon">
        <input type="search" placeholder="Search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </li>
    </ul>
  </nav>

  <!-- BODY-CONTENT -->
  <section class="index-section">

    <img src="./images/draft1.png" width="100%">

    <h1 class="feat-h1"> FEATURED PRODUCTS </h1>

    <ul class="box-content">

      <li class="home-card">
        <div class="box">
          <div class="slide-img">
            <img src="./images/1.jpg" alt="1">
            <div class="index-overlay">
            <form class="form" action="add2cart.php" method="get">
              <input type="number" value="1" name="quantity" hidden/>
              <input type="number" value="1" name="product_id" hidden />
              <button class="add-btn" type="submit">Add To Cart</button>
            </form>
            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="./products/pd1.php"> c </a>
              <a href="./products/pd1.php" class="price">$60.21</a>
            </div>
          </div>
        </div>
      </li>

      <li class="home-card">
        <div class="box">
          <div class="slide-img">
            <img src="./images/2.jpg" alt="2">
            <div class="index-overlay">
            <form class="form" action="add2cart.php" method="get">
              <input type="number" value="1" name="quantity" hidden/>
              <input type="number" value="2" name="product_id" hidden />
              <button class="add-btn" type="submit">Add To Cart</button>
            </form>
            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="./products/pd2.php"> Musashi High Protein Chocolate 2kg </a>
              <a href="./products/pd2.php" class="price">$76.49</a>
            </div>
          </div>
        </div>
      </li>

      <li class="home-card">
        <div class="box">
          <div class="slide-img">
            <img src="./images/5.jpg" alt="3">
            <div class="index-overlay">
            <form class="form" action="add2cart.php" method="get">
              <input type="number" value="1" name="quantity" hidden/>
              <input type="number" value="3" name="product_id" hidden />
              <button class="add-btn" type="submit">Add To Cart</button>
            </form>
            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="./products/pd5.php"> Universal Animal Energy 60 Capsules </a>
              <a href="./products/pd5.php" class="price">$29.00</a>
            </div>
          </div>
        </div>
      </li>

      <li class="home-card">
        <div class="box">
          <div class="slide-img">
            <img src="./images/9.jpg" alt="4">
            <div class="index-overlay">
            <form class="form" action="add2cart.php" method="get">
              <input type="number" value="1" name="quantity" hidden/>
              <input type="number" value="4" name="product_id" hidden />
              <button class="add-btn" type="submit">Add To Cart</button>
            </form>
            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="./products/pd9.php"> Rich Piana 5% Nutrition 90 Capsules </a>
              <a href="./products/pd9.php" class="price">$77.00</a>
            </div>
          </div>
        </div>
      </li>
    </ul>
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

</body>
</html>
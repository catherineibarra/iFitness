<?php
session_start();
include('access.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <title> Shop 2 | iFitness </title>
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
  <h1 class="center py-3">Fitness Equipments</h1>
  <section class="section category">

    <!-- ROW 1 -->
    <div class="cat-center">
      <ul class="box-content">

        <li class="home-card">
          <div class="box">
            <div class="slide-img">
              <img src="./images/210.jpg" alt="21">
              <div class="index-overlay">
                <form class="form" action="add2cart.php" method="get">
                  <input type="number" value="1" name="quantity" hidden />
                  <input type="number" value="21" name="product_id" hidden />
                  <button class="add-btn" type="submit">Add To Cart</button>
                </form>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="./products/pd21.php"> Rockit Dumbbell Rack</a>
                <a href="./products/pd21.php" class="price">$702</a>
              </div>
            </div>
          </div>
        </li>

        <li class="home-card">
          <div class="box">
            <div class="slide-img">
              <img src="./images/220.jpg" alt="22">
              <div class="index-overlay">
                <form class="form" action="add2cart.php" method="get">
                  <input type="number" value="1" name="quantity" hidden />
                  <input type="number" value="22" name="product_id" hidden />
                  <button class="add-btn" type="submit">Add To Cart</button>
                </form>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="./products/pd22.php">Home Gym Power Tower Fitness Workout Equipment Height Adjustable Chin Pull Up Bar Dip Station Weight Bench</a>
                <a href="./products/pd22.php" class="price">$319.97</a>
              </div>
            </div>
          </div>
        </li>

        <li class="home-card">
          <div class="box">
            <div class="slide-img">
              <img src="./images/230.jpg" alt="23">
              <div class="index-overlay">
                <form class="form" action="add2cart.php" method="get">
                  <input type="number" value="1" name="quantity" hidden />
                  <input type="number" value="23" name="product_id" hidden />
                  <button class="add-btn" type="submit">Add To Cart</button>
                </form>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="./products/pd23.php">Muliti Gym 3 Station Jx930 158LBS (72KG) Stack Weights JX Fitness Home GYM</a>
                <a href="./products/pd23.php" class="price">$1299</a>
              </div>
            </div>
          </div>
        </li>

        <li class="home-card">
          <div class="box">
            <div class="slide-img">
              <img src="./images/240.jpg" alt="24">
              <div class="index-overlay">
                <form class="form" action="add2cart.php" method="get">
                  <input type="number" value="1" name="quantity" hidden />
                  <input type="number" value="24" name="product_id" hidden />
                  <button class="add-btn" type="submit">Add To Cart</button>
                </form>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="./products/pd24.php">Gym Weight Training Exercise Equipment Strength Machine</a>
                <a href="./products/pd24.php" class="price">$369.99</a>
              </div>
            </div>
          </div>
        </li>

        <li class="home-card">
          <div class="box">
            <div class="slide-img">
              <img src="./images/250.jpg" alt="25">
              <div class="index-overlay">
                <form class="form" action="add2cart.php" method="get">
                  <input type="number" value="1" name="quantity" hidden />
                  <input type="number" value="25" name="product_id" hidden />
                  <button class="add-btn" type="submit">Add To Cart</button>
                </form>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="./products/pd25.php">Genki Magnetic Cross Trainer Elliptical Trainer Machine Home Gym Equipment with LED Display</a>
                <a href="./products/pd25.php" class="price">$39.88</a>
              </div>
            </div>
          </div>
        </li>

      </ul>
    </div>

    <!-- ROW 2 -->
    <div class="cat-center">
      <ul class="box-content">
      <li class="home-card">
          <div class="box">
            <div class="slide-img">
              <img src="./images/260.jpg" alt="26">
              <div class="index-overlay">
                <form class="form" action="add2cart.php" method="get">
                  <input type="number" value="1" name="quantity" hidden />
                  <input type="number" value="26" name="product_id" hidden />
                  <button class="add-btn" type="submit">Add To Cart</button>
                </form>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="./products/pd26.php">Genki Exercise Bike Spin Stationary Shock Absorbing Home Gym Fitness Equipment Adjustable Magnetic Resistance</a>
                <a href="./products/pd26.php" class="price">$379.97</a>
              </div>
            </div>
          </div>
        </li>

        <li class="home-card">
          <div class="box">
            <div class="slide-img">
              <img src="./images/270.jpg" alt="27">
              <div class="index-overlay">
                <form class="form" action="add2cart.php" method="get">
                  <input type="number" value="1" name="quantity" hidden />
                  <input type="number" value="27" name="product_id" hidden />
                  <button class="add-btn" type="submit">Add To Cart</button>
                </form>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="./products/pd27.php">7-In-1 Weight Bench Multi-Function Power Station Fitness Gym Equipment</a>
                <a href="./products/pd27.php" class="price">$150.30</a>
              </div>
            </div>
          </div>
        </li>

        <li class="home-card">
          <div class="box">
            <div class="slide-img">
              <img src="./images/280.jpg" alt="28">
              <div class="index-overlay">
                <form class="form" action="add2cart.php" method="get">
                  <input type="number" value="1" name="quantity" hidden />
                  <input type="number" value="28" name="product_id" hidden />
                  <button class="add-btn" type="submit">Add To Cart</button>
                </form>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="./products/pd28.php">Centra Magnetic Rowing Machine 8 Level Resistance Exercise Fitness Home Gym</a>
                <a href="./products/pd28.php" class="price">$420</a>
              </div>
            </div>
          </div>
        </li>

        <li class="home-card">
          <div class="box">
            <div class="slide-img">
              <img src="./images/290.jpg" alt="29">
              <div class="index-overlay">
                <form class="form" action="add2cart.php" method="get">
                  <input type="number" value="1" name="quantity" hidden />
                  <input type="number" value="29" name="product_id" hidden />
                  <button class="add-btn" type="submit">Add To Cart</button>
                </form>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="./products/pd29.php">Push Up Bracket</a>
                <a href="./products/pd29.php" class="price">$35</a>
              </div>
            </div>
          </div>
        </li>

        <li class="home-card">
          <div class="box">
            <div class="slide-img">
              <img src="./images/300.jpg" alt="30">
              <div class="index-overlay">
                <form class="form" action="add2cart.php" method="get">
                  <input type="number" value="1" name="quantity" hidden />
                  <input type="number" value="30" name="product_id" hidden />
                  <button class="add-btn" type="submit">Add To Cart</button>
                </form>
              </div>
            </div>
            <div class="detail-box">
              <div class="type">
                <a href="./products/pd30.php">Wall Mounted Pull Up Multi Function Home Gym Exercise Fitness Indoor Exercise Equipment Gym House Fitness US STORE</a>
                <a href="./products/pd30.php" class="price">$756.99</a>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

<!--pages section-->
  <div class="center py-3">
    <!--pages-->
    <a href="shop.php">Page 1 | &nbsp</a>
    <a href="shop2.php">Page 2 | &nbsp</a>
    <a href="shop3.php">Page 3 &nbsp</a>
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

</body>

</html>
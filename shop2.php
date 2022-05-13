<?php
session_start();
include('access.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <title> Shop | iFitness </title>
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
  <section class="section category">
    <!-- BODY-CONTENT -->
    <section class="section category">

      <!-- ROW 1 -->
      <div class="cat-center">
        <ul class="box-content">

          <li class="home-card">
            <div class="box">
              <div class="slide-img">
                <img src="./images/111.jpg" alt="11">
                <div class="index-overlay">
                  <form class="form" action="add2cart.php" method="get">
                    <input type="number" value="1" name="quantity" hidden />
                    <input type="number" value="11" name="product_id" hidden />
                    <button class="add-btn" type="submit">Add To Cart</button>
                  </form>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="./products/pd11.php"> Fusion Push-up Workout Set</a>
                  <a href="./products/pd11.php" class="price">$69.99</a>
                </div>
              </div>
            </div>
          </li>

          <li class="home-card">
            <div class="box">
              <div class="slide-img">
                <img src="./images/120.jpg" alt="12">
                <div class="index-overlay">
                  <form class="form" action="add2cart.php" method="get">
                    <input type="number" value="1" name="quantity" hidden />
                    <input type="number" value="12" name="product_id" hidden />
                    <button class="add-btn" type="submit">Add To Cart</button>
                  </form>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="./products/pd12.php"> WalkingPad Foldable Treadmill</a>
                  <a href="./products/pd12.php" class="price">$1099</a>
                </div>
              </div>
            </div>
          </li>

          <li class="home-card">
            <div class="box">
              <div class="slide-img">
                <img src="./images/102.png" alt="10">
                <div class="index-overlay">
                  <form class="form" action="add2cart.php" method="get">
                    <input type="number" value="1" name="quantity" hidden />
                    <input type="number" value="10" name="product_id" hidden />
                    <button class="add-btn" type="submit">Add To Cart</button>
                  </form>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="./products/pd10.php"> Two Person Station Multi Gym/Station With Smith Machine</a>
                  <a href="./products/pd10.php" class="price">$2037.00</a>
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
                <img src="./images/130.jpg" alt="13">
                <div class="index-overlay">
                  <form class="form" action="add2cart.php" method="get">
                    <input type="number" value="1" name="quantity" hidden />
                    <input type="number" value="13" name="product_id" hidden />
                    <button class="add-btn" type="submit">Add To Cart</button>
                  </form>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="./products/pd13.php"> Thigh Toner Workout Equipment For Women</a>
                  <a href="./products/pd13.php" class="price">$24.97</a>
                </div>
              </div>
            </div>
          </li>

          <li class="home-card">
            <div class="box">
              <div class="slide-img">
                <img src="./images/150.jpg" alt="15">
                <div class="index-overlay">
                  <form class="form" action="add2cart.php" method="get">
                    <input type="number" value="1" name="quantity" hidden />
                    <input type="number" value="15" name="product_id" hidden />
                    <button class="add-btn" type="submit">Add To Cart</button>
                  </form>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="./products/pd15.php">Sports Suits For Women</a>
                  <a href="./products/pd15.php" class="price">$169.99</a>
                </div>
              </div>
            </div>
          </li>


          <li class="home-card">
            <div class="box">
              <div class="slide-img">
                <img src="./images/170.jpg" alt="17">
                <div class="index-overlay">
                  <form class="form" action="add2cart.php" method="get">
                    <input type="number" value="1" name="quantity" hidden />
                    <input type="number" value="17" name="product_id" hidden />
                    <button class="add-btn" type="submit">Add To Cart</button>
                  </form>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="./products/pd17.php"> Sport Suit Workout Sportswear</a>
                  <a href="./products/pd17.php" class="price">$129.99</a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <!-- ROW 3 -->
      <div class="cat-center">
        <ul class="box-content">
        <li class="home-card">
            <div class="box">
              <div class="slide-img">
                <img src="./images/162.jpg" alt="16">
                <div class="index-overlay">
                  <form class="form" action="add2cart.php" method="get">
                    <input type="number" value="1" name="quantity" hidden />
                    <input type="number" value="16" name="product_id" hidden />
                    <button class="add-btn" type="submit">Add To Cart</button>
                  </form>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="./products/pd16.php">Gym Long Sleeve Top</a>
                  <a href="./products/pd16.php" class="price">$102</a>
                </div>
              </div>
            </div>
          </li>

          <li class="home-card">
            <div class="box">
              <div class="slide-img">
                <img src="./images/180.jpg" alt="18">
                <div class="index-overlay">
                  <form class="form" action="add2cart.php" method="get">
                    <input type="number" value="1" name="quantity" hidden />
                    <input type="number" value="18" name="product_id" hidden />
                    <button class="add-btn" type="submit">Add To Cart</button>
                  </form>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="./products/pd18.php"> MP Seamless 1/4 Zip - Dark Grey Marl For Men</a>
                  <a href="./products/pd18.php" class="price">$109</a>
                </div>
              </div>
            </div>
          </li>

          <li class="home-card">
            <div class="box">
              <div class="slide-img">
                <img src="./images/190.jpg" alt="19">
                <div class="index-overlay">
                  <form class="form" action="add2cart.php" method="get">
                    <input type="number" value="1" name="quantity" hidden />
                    <input type="number" value="19" name="product_id" hidden />
                    <button class="add-btn" type="submit">Add To Cart</button>
                  </form>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="./products/pd19.php">MP Velocity 1/4 Zip Top - Charcoal Marl For Men </a>
                  <a href="./products/pd19.php" class="price">$179.99</a>
                </div>
              </div>
            </div>
          </li>

          <li class="home-card">
            <div class="box">
              <div class="slide-img">
                <img src="./images/201.jpg" alt="20">
                <div class="index-overlay">
                  <form class="form" action="add2cart.php" method="get">
                    <input type="number" value="1" name="quantity" hidden />
                    <input type="number" value="20" name="product_id" hidden />
                    <button class="add-btn" type="submit">Add To Cart</button>
                  </form>
                </div>
              </div>
              <div class="detail-box">
                <div class="type">
                  <a href="./products/pd20.php">MP Men's Linear Mark Graphic Training 1/4 Zip - Ice Blue</a>
                  <a href="./products/pd20.php" class="price">$200</a>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <!--pages-->
        <a href="shop.php">page 1 | &nbsp</a>
        <a href="shop2.php">page 2 |  &nbsp</a>
        <a href="shop3.php">page 3  &nbsp</a> 
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

</body>

</html>
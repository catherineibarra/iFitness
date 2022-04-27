<?php
session_start();
include('access.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/utilities.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title> Home | iFitness </title>
</head>

<body>
  <!--header bar-->
  <nav>
    <ul>
      <li class="logo"><img src="./images/logo3.png"></li>
      <div class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>

        <li><a href="cart.php">Cart</a></li>
        <?php if ($isLoggedIn) : ?>
          <li><a href="?profile=profile">Welcome, <?= $_SESSION["_reg"] ?>!</a></li>
          <li><a href="?logout=logout">Logout</a></li>

        <?php else : ?>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>

        <?php endif; ?>

      </div>
      <li class="search-icon">
        <input type="search" placeholder="Search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </li>
    </ul>
  </nav>

  <!-- Center screen-->
  <section class="section category">
    <div class="cat-center">
      <div class="cat">
        <a href="./products/pd1.php">
          <img src="./images/1.jpg" alt="" />
          <p>Ghost 100% Whey Protein 2lb</p>
          <p>$60.21</p>
        </a>
      </div>
      <div class="cat">
        <a href="./products/pd2.php">
          <img src="./images/2.jpg" alt="" />
          <p>Musashi High Protein Chocolate 2kg</p>
          <p>$76.49</p>
        </a>
      </div>
      <div class="cat">
        <a href="./products/pd3.php">
          <img src="./images/3.jpg" alt="" />
          <p>Muscle Matrix - 60 vcaps (25mg per capsule)</p>
          <p>$109</p>
        </a>
      </div>
    </div>
  </section>


  <!--Footer bar-->
  <footer class="footer bg-primary py-3">
    <div class="container grid grid-3">
      <!--Social media parts-->
      <div class="social">
        <a href="#"><i class="fab fa-github fa-2x"></i></a>
        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
      </div>
      <div>
        <ul>
          <li>Copyright &copy; IFitness. All Rights reserved. 2022</li>
        </ul>
      </div>
      <nav>
        <!--pages for like others, more about us etc.-->
        <ul>
          <li><a href="#"># links 1 </a></li>
          <li><a href="#"># links 2</a></li>
          <li><a href="#"># links 3</a></li>
        </ul>
      </nav>
    </div>
  </footer>
</body>

</html>
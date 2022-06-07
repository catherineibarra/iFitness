<?php
session_start();
include ('access.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/utilities.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <title>Payment Page</title>
  </style>
</head>
<style>
.payment{
  text-align: center;
}

.payment img{
  width: 256px;
  height: 128px;
  margin: auto;
}

</style>
  <body>
    <!--header bar-->
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
    <!-- Center screen-->
    <div class="payment">
            <img src ="https://icons.iconarchive.com/icons/paomedia/small-n-flat/128/sign-check-icon.png" class = "center"> 
            <br>
            <p>
                Success!
                <br>
                Your request has been processed successfully
                <br>
                You'll receive a confirmation email shortly.
                <br>
              </p>
              <br>      
       
        </div>

        <div class="center">
          <a href = "shop.php">
              <input type="submit" value="continue shopping" name="submit" class="btn btn-secondary" />
            </a>
          </div>
               
  <!-- FOOTER -->
  <footer class="nothing">
    <ul>
      <div class="social">
        <a href="https://github.com/catherineibarra/iFitness"><i class="fab fa-github fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="not-found.html"><i class="fab fa-twitter fa-2x"></i></a>
      </div>

      <li>&copy; 2022 iFitness. All Rights Reserved.</li>

      <div class="navbar">
        <li><a href="aboutus.php"> About Us </a></li> 
        <li><a href="faq.php"> FAQ </a></li>
      </div>
    </ul>
  </footer>
</body>
</html>

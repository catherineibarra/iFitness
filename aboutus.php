<?php
session_start();
include('access.php');
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

  <style>
    .aboutus-center {
      max-width: 700px;
      margin: auto;
    }
  </style> <!-- BODY-CONTENT -->
  <div class="aboutus-center">
    <h2 class="faq-h2">About us</h2>
    <br>
    <b>
      <p>iFitness Website</p>
    </b>
    <p>Develop an e-commerce website for "iFitness" fitness products that will enable consumers to purchase the products they desire. The website must incorporate a variey of services, including user registration, search engine, product list, product information, and shopping cart. The website must function properly and be completed by the end of the semster. Through collaboration, team members acquire website building skills.</p>
    <br>
    <b>
      <p>Team</p>
    </b>
    <p>- Catherine Ibarra</p>
    <p>- Jameson Yeo</p>
    <p>- Alan Liang</p>
    <p>- Cindy Chen</p>
    <p>- Chenduo Ouyang</p>
    <br>
    <b>
      <p>Programming Language</p>
    </b>
    <p>- PHP</p>
    <p>- HTML</p>
    <p>- CSS</p>
    <p>- JavaScript</p>
    <p>- MySQL</p>
    <br>
    <b>
      <p>Development Environment</p>
    </b>
    <p>- phpMyAdmin - we utilize the web-based version of phpMyAdmin to managethe iFitness database. This database is offered by AUT and is accessed using a student account at AUT.</p>
    <p>- WinSCP and Cyberduck - our website is tested and run both WinSCP (Windows) and Cyberduck (Mac). We may now open the web page in the browser after uploading the website's source code to WinSCP/Cyberduck.</p>
    <p>- Visual Studio Code - is an incredibly convenient compiler that really aids out development.</p>
    <p>- GitHub - we utilize GitHub to manager version control with the team. Each member's new code will be submitted toGitHub, and other team members will have access to the current version via the GitHub desktop. Additionally,the team may view the modifications madeto the version by each member.</p>
    <br>
    <br>
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
        <li><a href="aboutus.php">About Us </a></li>
        <li><a href="faq.php"> FAQ </a></li>
      </div>
    </ul>
  </footer>
</body>

</html>
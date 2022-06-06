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
  <title> Shop | iFitness </title>
</head>

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
          <li><a href="register.php">Register</a></li>

        <?php endif; ?>

      </div>
      <li class="search-icon">
        <form method="GET" action="search.php">
          <input type="search" name="search" placeholder="Search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </li>
    </ul>
  </nav>



<?php

$userSearch = $_GET["search"];

if (empty($userSearch)) {
  echo "<p>Error: Please enter a keyword to search.</p>";
} else {
  require_once('../../conf/sdp.inc.php');
  $conn = @mysqli_connect(
  $sql_host,
  $sql_user,
  $sql_pass,
  $sql_db
  );

  if ($conn) {
    // DATABASE CONNTECTED

    // check if database table exists
    $validateQuery = "SELECT * FROM products";
    $tableExists = mysqli_query($conn, $validateQuery);

    if (!$tableExists) {
      echo "<p>Error: No records of database</p>";
    } else {
      //database table exists
      $searchQuery = "SELECT * FROM products WHERE name LIKE '%$userSearch%'";
      $results = mysqli_query($conn, $searchQuery);

      if (!mysqli_num_rows($results)) {
        echo "No status could be found that matches $userSearch";
      } else {
        echo "<div>";
        while ($row = mysqli_fetch_array($results)) {
          echo "Product Name: " . $row["name"],
        "Price: " . $row["price"],
        "Image:  " . $row["image"];
        
        }
        echo "</div>";
      }
    }
  } else {
    echo "<p>Databse connection failure</p>";
  }
}
?>

<footer>
<ul>
  <div class="social">
    <a href="#"><i class="fab fa-github fa-2x"></i></a>
    <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
    <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
    <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
  </div>

  <li>&copy; 2022 iFitness. All Rights Reserved.</li>

  <div class="navbar">
    <li><a href="#">About Us </a></li>
    <li><a href="#">Terms and Policy</a></li>
  </div>
</ul>
</footer>

</body>

</html>
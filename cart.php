<?php
session_start();
include('access.php');


$u_name = $_SESSION['_reg'];

$cart_query = "SELECT * FROM cart WHERE u_name = '$u_name';";
$cart_results = mysqli_query($conn, $cart_query);
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <title> My Cart | iFitness </title>
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
        <li><a href="order.php">My Order</a></li>
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
  <h1 class="shopping-cart-header center py-3">
      Shopping Cart <i class="fa-solid fa-cart-arrow-down"></i>
        </h1>
  <div class="shopping-cast">
    <?php
    if (mysqli_num_rows($cart_results)) {
    ?>
      <table>
        <thead>
          <th>Product Detail</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total Price</th>
          <th>Action</th>
        </thead>
        <?php

        $total_price = 0;

        while ($row = mysqli_fetch_assoc($cart_results)) {
          $price = $row['quantity'] * $row['price'];
          $total_price = $total_price + $price;
        ?>
          <tr>
            <td style="white-space: nowrap;"><img src="<?php echo str_replace('pd', '', str_replace('../', '/', $row['image'])) ?>" /></td>
            <td width="99%" style=" font-weight: bold;"><?php echo $row['name'] ?></td>
            <td style="white-space: nowrap;">$<?php echo $row['price'] ?></td>
            <td style="white-space: nowrap;">
              <form action="update_cart.php" method="get">
                <input type="number" class="quantity-input" value="<?php echo $row['quantity'] ?>" name="quantity">
                <input type="number" value="<?php echo $row['id'] ?>" name="id" hidden>
                <button class="quantity-update-btn">Update</button>
              </form>
            </td>
            <td style="white-space: nowrap;">$<?php echo $row['quantity'] * $row['price'] ?> </td>
            <td style="white-space: nowrap;">
            <button class=" remove-btn" onclick="location.href='delete_cart.php?id=<?php echo $row['id'] ?>';">Remove</button>
            </td>
          </tr>
        <?php
        }
        ?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><b>Total:</b></td>
          <td>$<?php echo $total_price ?> </td>
          <td>
            <button class=" remove-btn" onclick="location.href='delete_cart.php?id=all';">Remove All</button>
          </td>
        </tr>
      </table>
      <div style="width: 20%;margin: auto;">
        <form class="form" action="payment.php?totalprice=<?php echo $total_price ?>" method="get">
          <input type="text" name="totalprice" id="totalprice" value="<?php echo $total_price ?>" hidden>
          <button class="checkout-btn">Proceed To Checkout</button>
        </form>
        <form class="form" action="shop.php">
          <button class="checkout-btn">Continue shopping</button>
        </form>
      </div>
    <?php
    } else {
    ?>
      <p style="text-align: center;color: red;">Your Cart is Empty!</p>
    <?php } ?>
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

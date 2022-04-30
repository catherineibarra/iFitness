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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/utilities.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title> My Cart | iFitness </title>
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
        <input type="search" placeholder="Search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </li>
    </ul>
  </nav>
  <!-- Center screen-->
  <div class="shopping-cast">
    <p class="shopping-cart-header">
      SHOPPING CART
    </p>
    <?php
    if (mysqli_num_rows($cart_results)) {
    ?>
      <table style="border: 1px solid black;">
        <thead>
          <th>product detail</th>
          <th>product name</th>
          <th>price</th>
          <th>quantity</th>
          <th>total price</th>
          <th>action</th>
        </thead>
        <?php

        $total_price = 0;

        while ($row = mysqli_fetch_assoc($cart_results)) {
          $price = $row['quantity'] * $row['price'];
          $total_price = $total_price + $price;
        ?>
          <tr>
            <td style="white-space: nowrap;"><img src="<?php echo str_replace('pd', '', str_replace('../', '/', $row['image'])) ?>" /></td>
            <td width="99%"" style=" font-weight: bold;"><?php echo $row['name'] ?></td>
            <td style="white-space: nowrap;">$<?php echo $row['price'] ?></td>
            <td style="white-space: nowrap;">
              <form action="update_cart.php" method="get">
                <input type="number" class="quantity-input" value="<?php echo $row['quantity'] ?>" name="quantity">
                <input type="number" value="<?php echo $row['id'] ?>" name="id" hidden>
                <button class="quantity-update-btn">Update</button>
              </form>
            </td>
            <td style="white-space: nowrap;">$<?php echo $row['quantity'] * $row['price'] ?> </td>
            <td style="white-space: nowrap;"">
            <button class=" remove-btn" onclick="location.href='delete_cart.php?id=<?php echo $row['id'] ?>';">Remove</button>
            </td>
          </tr>
        <?php
        }
        ?>
        <tr>
          <td></td>
          <td>grand total:</td>
          <td></td>
          <td></td>
          <td>$<?php echo $total_price ?> </td>
          <td>
            <button class=" remove-btn" onclick="location.href='delete_cart.php?id=all';">Remove All</button>
          </td>
        </tr>
      </table>
      <div style="width: 20%;margin: auto;">
          <form class="form" action="payment.php">
        <button class="checkout-btn">Proceed To Checkout</button>
           </form>
 <form class="form" action="shop.php">
         <button class="checkout-btn">Continue shopping</button>
                  </form>
      </div>
    <?php
    } else {
    ?>
      <p style="text-align: center;color: red;">No Any Product In Cart</p>
    <?php } ?>
  </div>


<!--Footer bar-->
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



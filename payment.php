<?php
session_start();
include('acess.php');

?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/utilities.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title> Payment Page | iFitness </title>
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
  <div class="center">
    <div class="payment-form">
      <h2>Payment</h2>
      <p>
        Please enter your payment details here
      </p>
      <form action="payment sucess.php" method="POST">
        <div class="form-control">
          <label or="NameOnCard">Name on card</label><br>
          <input type="text" placeholder="First name" name="firstname" id="firstname" required />
        </div>
        <div class="form-control">
          <label for="Cardnumber">Card number</label><br>
          <input type="text" placeholder="1111-2222-3333-4444" name="cardnumber" id="cardnumber" required />
        </div>
        <div class="form-control">
          <label for="expdate">Expire Date</label><br>
          <input type="month" name="month" id="month" min="<?php echo date("Y-m") ?>" max="9999-12" required />
        </div>
        <div class="form-control">
          <label for="cvv">CVV</label><br>
          <input type="text" id="cvv" name="cvv" placeholder="001" required />
        </div>
        <div class="form-control">
          <h4>Accepted cards</h4>
          <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png" style="width:10%">
          <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png" style="width:10%">
        </div>
        <p>
          Please enter your Billing address here
        </p>
        <div class="form-control">
          <label for="Staddr">Address</label><br>
          <input type="text" placeholder="542 W. 15th Street" name="straddr" id="straddr" required />
        </div>
        <div class="form-control">
          <label for="City">City</label><br>
          <input type="text" placeholder="New York" name="city" id="city" required />
        </div>
        <div class="form-control">
          <label for="Zip">Zip code</label><br>
          <input type="text" placeholder="10001" name="zip" id="zip" required />
        </div>

        <div class="form-control">
          <label for="Country">Country</label><br>
          <select name="country">
            <option value="Australia">Australia</option>
            <option value="Brazil">Brazil</option>
            <option value="Canada">Canada</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="Italy">Italy</option>
            <option value="Japan">Japan</option>
            <option value="Mexico">Mexico</option>
            <option value="New Zealand">New Zealand</option>
            <option value="United States">United States</option>
          </select>
        </div>

        <div>
          <br>
          <input type="submit" value="Pay now" name="submit" class="btn btn-secondary" />
          <?php echo $total_price ?>
        </div>

      </form>
    </div>
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
<?php
session_start();
include ('acess.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="utilities.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <title>Payment Page</title>
  </style>
  <body>
    <!--header bar-->
    <div class="navbar">
      <div class="container flex">
        <h1 class="logo">IFitness</h1>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
          </ul>
        </nav>
        <nav>
          <ul>
            <li><input type="text" placeholder="Search..." /></li>
            <li>
              <button type="submit"><i class="fa fa-search"></i></button>
            </li>
          </ul>
        </nav>
        <nav>
          <ul>
            <li><a href="cart.php">Cart</a></li>
            <?php if ($isLoggedIn): ?>
              <li>Welcome <?= $_SESSION["_reg"] ?></li>
                <li><a href="?logout=logout">Logout</a></li>

                <?php else: ?>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Register</a></li>

              <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Center screen-->
   <?php
session_start();
include ('acess.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="utilities.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
    <title>Payment Page</title>
  </style>
  <body>
    <!--header bar-->
    <div class="navbar">
      <div class="container flex">
        <h1 class="logo">IFitness</h1>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
          </ul>
        </nav>
        <nav>
          <ul>
            <li><input type="text" placeholder="Search..." /></li>
            <li>
              <button type="submit"><i class="fa fa-search"></i></button>
            </li>
          </ul>
        </nav>
        <nav>
          <ul>
            <li><a href="cart.php">Cart</a></li>
            <?php if ($isLoggedIn): ?>
              <li>Welcome <?= $_SESSION["_reg"] ?></li>
                <li><a href="?logout=logout">Logout</a></li>

                <?php else: ?>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Register</a></li>

              <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Center screen-->
    <div class="center">
      <div class="payment-form">
        <h2>Payment</h2>
          <p>
            Please enter your payment details here
          </p>
          <div class="form-control"> 
            <label or="NameOnCard">Name on card</label><br>
            <input type="text" placeholder="First name" name="firstname" id="firstname"required/>
          </div>
          <div class="form-control"> 
            <label for="Cardnumber">Card number</label><br>
            <input type="text" placeholder="1111-2222-3333-4444" name="cardnumber" id="cardnumber" required/>
          </div>
          <div class="form-control"> 
            <label for="expdate">Expire Date</label><br>
            <input type="month" name="month" id="month" min="2022-04" required/>
          </div>
          <div class="form-control"> 
            <label for="cvv">CVV</label><br>
            <input type="text" id="cvv" name="cvv" placeholder="001"required/>  
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
            <input type="text" placeholder="542 W. 15th Street" name="straddr" id="straddr"required/> 
          </div>
          <div class="form-control"> 
            <label for="City">City</label><br>
            <input type="text" placeholder="New York" name="city" id="city"required/>
          </div>
          <div class="form-control"> 
            <label for="Zip">Zip code</label><br>
            <input type="text" placeholder="10001" name="zip" id="zip" required/>
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
            <a href = "payment sucess.html">
              <input type="submit" value="Pay now" name="submit" class="btn btn-secondary" />
            </a>
          </div>
    </div>
</form>
    </div>
  </div>

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

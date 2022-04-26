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
  </head>
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
   <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
          <div class="col-50">
          <h3>Enter your payment details</h3>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Card number            MM/YY/CVC">          
          </div>

               
          <div class="col-50">
            <input type="text" id="adr" name="street address" placeholder="Street address">
            <input type="text" id="address" name="address" placeholder="Apt,unit,suite,etc.">
            </div>
        <div class = "row">
           <div class = "col-50">
             <select name = "Country">
               <option value = "Afghanistan">Afghanistan</option>
               <option value = "Bahrain">Bahrain</option>
               <option value = "Cambodia">Cambodia</option>
                <option value = "Denmark">Denmark</option>
               <option value = "Finland">Finland</option>
                <option value = "Japan">Japan</option>
               <option value = "Mexico">Mexico</option>
                <option value = "Netherlands">Netherlands</option>
               <option value = "New Zealand">New Zealand</option>
                <option value = "United States">United States</option>
               <Select>
            </div>  
               <div class = "col-50">  
                  <input type="text" id="city" name="city" placeholder="City"> 
               </div>
               <div>
               
                 <div class ="col-50">
                  <input type="text" id="state" name="state" placeholder="State"> 
                 <input type = "text" id = "zip" name = "zip" placeholder="Zip code">
                 </div>
                 
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
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

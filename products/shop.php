<?php
 session_start();
 include('access.php');
 $name = $_SESSION["_reg"];
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="utilities.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Login Page</title>
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
                <li><input type="text" placeholder="Search..."></li>
                <li><button type="submit"><i class="fa fa-search"></i></button></li>      
              </ul>
            </nav>
            <nav>
            <ul>
              <li><a href="cart.php">Cart</a></li>
              <?php if ($isLoggedIn): ?>
                <li><a herf="profile.php">
                    Welcome <?php echo($name); ?>
                </a></li>
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

    <section class="section category">
      <div class="cat-center">
        <div class="cat">
          <a href="./products/pd1.php">
          <img src="./images/1.jpg" alt=""/>
          <p>Ghost 100% Whey Protein 2lb</p>
          <p>$60.21</p></a>
        </div>
        <div class="cat">
          <a href="./products/pd2.php">
          <img src="./images/2.jpg" alt="" />
          <p>Musashi High Protein Chocolate 2kg</p>
          <p>$76.49</p></a>
        </div>
        <div class="cat">
          <a href="./products/pd3.php">
          <img src="./images/3.jpg" alt="" />
          <p>Muscle Matrix - 60 vcaps (25mg per capsule)</p>
          <p>$109</p></a>
        </div>
      </div>

      <div class="cat-center">
        <div class="cat">
          <a href="./products/pd4.php">
          <img src="./images/4.jpg" alt="" />
          <p>Scream Supps PINHEAD 1 Serve Sample</p>
          <p>$3.96</p></a>
        </div>
        <div class="cat">
          <a href="./products/pd5.php">
          <img src="./images/5.jpg" alt="" />
          <p>NIVERSAL ANIMAL ENERGY 60 CAPSULES</p>
          <p>$29</p></a>
        </div>
        <div class="cat">
          <a href="./products/pd6.php">
          <img src="./images/6.jpg" alt="" />
          <p>Muscle Building Vitamins for men - stamina booster for men </p>
          <p>$39</p></a>
        </div>
      </div>
      
      <div class="cat-center">
        <div class="cat">
          <a href="./products/pd7.php">
          <img src="./images/7.jpg" alt="" />
          <p>Cellucor C4 Original ID 60 Serves</p>
          <p>$68.90</p></a>
        </div>
        <div class="cat">
          <a href="./products/pd8.php">
          <img src="./images/8.jpg" alt="" />
          <p>Rich Piana 5% Nutrition Freak Show</p>
          <p>$78.90</p></a>
        </div>
        <div class="cat">
          <a href="./products/pd9.php">
          <img src="./images/9.jpg" alt="" />
          <p>Rich Piana 5% Nutrition 90 capsules</p>
          <p>$77</p></a>
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
            <li><a href="cart.php">Cart</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
          </ul>
        </nav>
      </div>
    </footer>
  </body>
</html>

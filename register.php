<?php
 session_start();
 include('access.php');
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
                <li><a href="?profile=profile">welcome <?=$_SESSION["_reg"]?></a></li>
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
      <div class="login-form">
        <h2>Register</h2>
          <p>
            Please fill in this form to create an account. or
            <a href="login.php">Login</a>
          </p>
        <form action="registerprocess.php" method="POST">
          <div class="form-control"> 
            <input type="text" placeholder="First name" name="firstname" id="firstname"requred/>
          </div>
          <div class="form-control"> 
            <input type="text" placeholder="Last name" name="lastname" id="lastname"requred/>
          </div>
          <div class="form-control"> 
            <input type="text" placeholder="Example@email.com" name="email" id="email" requred/>
          </div>
          <div class="form-control"> 
            <input type="text" placeholder="Username" name="username" id="username" requred/>
          </div>
          <div class="form-control"> 
            <input type="password" placeholder="Password" name="password" id="password" required/>
          </div>
          <div class="form-control"> 
            <input type="password" placeholder="Repeat Password" name="passreapeat" id="passreapeat" required/>
          </div>
          <div class="form-control">
            <select name="question">
              <option value="In what city were you born?">In what city were you born?</option>
              <option value="What is the name of your favourite pet?">What is the name of your favourite pet?</option>
              <option value="What is your mother's maiden name?">What is your mother's maiden name?</option>
              <option value="What high school did you attend?">What high school did you attend?</option>
              <option value="What is the name of your first school?">What is the name of your first school?</option>
              <option value="What was the make of your first car?">What was the make of your first car?</option>
              <option value="What was your favorite food as a child?">What was your favorite food as a child?</option>
              <option value="Where did you meet your spouse?">Where did you meet your spouse?</option>
            </select>
          </div>
          <div class="form-control"> 
            <input type="text" placeholder="Answer" name="answer" id="answer" requred/>
          </div>

            <div>
              <p>By creating an account you agree to our 
                <a href="#">terms and conditions.</a></p>
              <input type="submit" value="Submit" class="btn btn-secondary" />
              <input type="reset" value="Reset" class="btn btn-secondary" />
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
                  <li>
                    Copyright &copy; IFitness. All Rights reserved. 2022
                  </li>
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

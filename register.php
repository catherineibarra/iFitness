<?php
session_start();
include('registerprocess.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/utilities.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title> Register | iFitness </title>
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

  <div class="center">
    <div class="login-form">
      <h2>Register</h2>
      <p>
        Please fill in this form to create an account. or 
        <a href="login.php">Login</a>
      </p>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div class="form-control">
          <input type="text" value="<?php echo $firstname; ?>" placeholder="First name" name="firstname" id="firstname"  />
          <span class="error">*<?php echo$firstnameerr;?></span>
        </div>
        <div class="form-control">
          <input type="text" value="<?php echo $lastname; ?>" placeholder="Last name" name="lastname" id="lastname"  />
          <span class="error">* <?php echo $lastnameerr;?></span>
        </div>
        <div class="form-control">
          <input type="text" value="<?php echo $email; ?>" placeholder="Example@email.com" name="email" id="email" />
          <span class="error">* <?php echo $emailerr;?></span>
        </div>
        <div class="form-control">
          <input type="text" value="<?php echo $username; ?>" placeholder="Username" name="username" id="username" />
          <span class="error">* <?php echo $usernameerr;?><?php echo $exist_uname;?></span>
        </div>
        <div class="form-control">
          <input type="password" value="<?php echo $password; ?>" placeholder="Password" name="password" id="password" />
          <span class="error">* <?php echo $passworderr;?></span>
        </div>
        <div class="form-control">
          <input type="password" value="<?php echo $rep_pass; ?>" placeholder="Repeat Password" name="passreapeat" id="passreapeat" />
          <span class="error">* <?php echo $rep_passerr;?><?php echo $no_match;?></span>
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
          <input type="text" value="<?php echo $answer; ?>" placeholder="Answer" name="answer" id="answer" />
          <span class="error">* <?php echo $answererr;?></span>
        </div>

        <div>
          <p>By creating an account you agree to our
            <a href="#">terms and conditions.</a>
          </p>
          <input type="submit" value="Submit" name="submit" class="btn btn-secondary" />
          <input type="submit" value="Reset" name="reset" class="btn btn-secondary" />
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


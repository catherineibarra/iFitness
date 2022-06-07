<?php
session_start();
include('access.php');
include('information.php');
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

  <!--center part -->
  <div class="center">
    <div class="login-form">
      <h2>User Profile</h2>
      <p>
      </p>
      <form action="update_details.php" method="POST">
        <input type="hidden" value="<?php echo $u_name; ?>" name="u_username" id="username"/>
      <div class="form-control"> 
      <label>First Name:</label>
            <input type="text" value="<?php echo $f_name; ?>" name="u_firstname" id="firstname"/>
          </div>
          <div class="form-control"> 
          <label>Last Name:</label>
            <input type="text" value="<?php echo $l_name; ?>" name="u_lastname" id="lastname"/>
          </div>
          <div class="form-control"> 
          <label>Email:</label>
            <input type="text" value="<?php echo $email; ?>" name="u_email" id="email" />
          </div>
          <div class="form-control"> 
          </div>
          <div class="form-control">
          <label>Security Question:</label>
            <select name="u_question">
            <option><?php echo $question; ?></option>
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
          <label>Security Answer:</label>
            <input type="text" value="<?php echo $answer; ?>" name="u_answer" id="answer"/>
          </div>
          <div>
          <input type="submit" value="Update" class="btn btn-secondary" />
          </div>
      </form>
    </div>
  </div>

  <!--Footer bar-->
  <footer class="nothing">
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

  <!--Script -->
  <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
</body>

</html>

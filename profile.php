<?php
include('access.php');
include('information.php');
?>

<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <link rel="stylesheet" href="style.css" type="text/css" media="screen">
  <link rel="stylesheet" href="utilities.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <title>Profile Page</title>
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
          <?php if ($isLoggedIn) : ?>
            <li><a href="?profile=profile">welcome <?= $_SESSION["_reg"] ?></a></li>
            <li><a href="?logout=logout">Logout</a></li>

          <?php else : ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>

          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </div>
  <!--center part -->
  <div class="center">
    <div class="login-form">
      
    <h2>User Profile</h2>
      <p>
      </p>
      <form action="update.php" method="POST">
        <div class="form-control">
          <label>Full Name:</label>
          <input type="text" value="<?php echo ucfirst($f_name)," ",ucfirst($l_name); ?>" name="firstname" id="firstname" readonly />
        </div>
        <div class="form-control">
          <label>Email:</label>
          <input type="text" value="<?php echo $email; ?>" name="email" id="email" readonly />
        </div>
        <div class="form-control">
          <label>Username:</label>
          <input type="text" value="<?php echo $u_name; ?>" name="username" id="username" readonly />
        </div>
        <div class="form-control">
          <label>Security Question:</label>
          <input type="text" value="<?php echo $question; ?>" name="question" id="question" readonly />
        </div>
        <div class="form-control">
          <label>Security Answer:</label>
          <input type="password" value="<?php echo $answer; ?>" name="answer" id="myInput" readonly />
          <input type="checkbox" onclick="myFunction()">Show Answer
        </div>
        <div>
          <input type="submit" value="Edit Profile" class="btn btn-secondary" />
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
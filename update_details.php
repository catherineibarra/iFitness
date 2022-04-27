<?php
 include('access.php');
?>
<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/utilities.css">
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

<?php

 $u_firstname = $_POST["u_firstname"];
 $u_lastname = $_POST["u_lastname"];
 $u_email = $_POST["u_email"];
 $u_username = $_POST["u_username"];
 $u_password = ($_POST["u_password"]);
 $u_rep_pass = ($_POST["u_passreapeat"]);
 $u_question = $_POST["u_question"];
 $u_answer = $_POST["u_answer"];

//error message
$error_message = "";


$encrypt_code = md5($u_username);

    $salt = sha1(md5($u_password)).$encrypt_code; 
    $encrypt = hash('sha256',$u_password.$salt);

    if (!empty($error_message)) {
        echo $error_message;
    } else {
        
            //login details for database
            require_once('../../conf/sdp.inc.php');
            $conn = @mysqli_connect(
                $sql_host,
                $sql_user,
                $sql_pass,
                $sql_db
            );

        if (!$conn) {
            //database error message
            echo "<p style='color:red'>ERROR: Failed to connect</p>";
        } else {
            //database connected

            
            //checks if status code is already inside the database
            $code_query = "SELECT u_name FROM $sql_table WHERE u_name = '$u_username';";
            $code_results = mysqli_query($conn, $code_query);

            //this checks inside the row if there is a results that matches.
            if (mysqli_num_rows($code_results)) {
                
                //insert user inputs into database
                $insert_query = "UPDATE `$sql_table` SET `f_name`= '$u_firstname',`l_name`='$u_lastname',`email`='$u_email',`u_name`='$u_username',`question`='$u_question',`answer`='$u_answer' WHERE u_name = '$u_username'";
                $insert_results = mysqli_query($conn, $insert_query);

                //checks if query is inserted into the database.
                if (!$insert_results) {
                    //Failed error message
                    echo "<p style='color:red'>ERROR: ", $insert_query, " Failed</p>";
                } else {
                    //Successful 
                    echo "<p>Account has been Updated</p>";
                    echo "<script>window.open('profile.php','_self')</script>";
                }
            }
        }
    }

?>
 <!--Footer bar-->    
 <footer class="footer nothing bg-primary py-3">
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
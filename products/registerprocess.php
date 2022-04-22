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
    <?php

    //initialize variable from register.php

      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $email = $_POST["email"];
      $username = $_POST["username"];
      $password = ($_POST["password"]);
      $rep_pass = ($_POST["passreapeat"]);
      $question = $_POST["question"];
      $answer = $_POST["answer"];

    //error message
    $error_message = "";

    //checks if password is the same
    if ($password != $rep_pass) {
        $error_message .= "<p>Password does not match. Please enter the same password</p>";
    }

    //encrypting password
    $encrypt = hash('sha256',$password);

    //prints error message before entering into database
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

            //checking for database 
            $table_exists = mysqli_query($conn, "SELECT * FROM $sql_table;");


            if (!$table_exists) {
                
                //creating table in database
                $create_table = "CREATE TABLE $sql_table (f_name VARCHAR(40),l_name VARCHAR(40), email VARCHAR(50),u_name VARCHAR(20),p_word VARCHAR(255),question VARCHAR(50), answer VARCHAR(50))";
                mysqli_query($conn, $create_table);
            }
            
            //checks if status code is already inside the database
            $code_query = "SELECT u_name FROM $sql_table WHERE u_name = '$username';";
            $code_results = mysqli_query($conn, $code_query);

            //this checks inside the row if there is a results that matches.
            if (mysqli_num_rows($code_results)) {
                echo "<p style='color:red'>ERROR:'$username' already exist:<br>";
                echo "Please try another username.</p>";
            } else {

                //insert user inputs into database
                $insert_query = "INSERT INTO `$sql_table` (`f_name`, `l_name`, `email`, `u_name`, `p_word`, `question`, `answer`) VALUES ('$firstname','$lastname','$email','$username','$encrypt','$question','$answer');";
                $insert_results = mysqli_query($conn, $insert_query);

                //checks if query is inserted into the database.
                if (!$insert_results) {
                    //Failed error message
                    echo "<p style='color:red'>ERROR: ", $insert_query, " Failed</p>";
                } else {
                    //Successful 
                    echo "<p>Account has been registered</p>";
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
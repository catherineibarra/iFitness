<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register processes</title>
</head>

<body>
    <!--nav menu-->
    <div class="nav">
        <a href="index.html">Home Page</a>
        <a href="shop.html">Shop</a>
        <input type="text" placeholder="Search...">
        <button type="submit"><i class="fa fa-search"></i></button>
        <a href="cart.html">Cart</a>
        <a href="login.html">Login</a>
        <a href="register.html">Register</a>
    </div>

    <?php

    //initialize variable from register.html
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = ($_POST["password"]);
    $rep_pass = ($_POST["passreapeat"]);

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
                echo "checking database";
                //creating table in database
                $create_table = "CREATE TABLE $sql_table (firstname VARCHAR(40) PRIMARY KEY,lastname VARCHAR(40), email VARCHAR(50),username VARCHAR(20),password VARCHAR(255))";
                mysqli_query($conn, $create_table);
            }
            echo "database found";
            //checks if status code is already inside the database
            $code_query = "SELECT username FROM $sql_table WHERE username = '$username';";
            $code_results = mysqli_query($conn, $code_query);

            //this checks inside the row if there is a results that matches.
            if (mysqli_num_rows($code_results)) {
                echo "<p style='color:red'>ERROR:'$username' already exist:<br>";
                echo "Please try another username.</p>";
            } else {

                //insert user inputs into database
                $insert_query = "INSERT INTO `$sql_table` (`firstname`, `lastname`, `email`, `username`, `password`) VALUES ('$firstname','$lastname','$email','$username','$encrypt');";
                $insert_results = mysqli_query($conn, $insert_query);

                //checks if query is inserted into the database.
                if (!$insert_results) {
                    //Failed error message
                    echo "<p style='color:red'>ERROR: ", $insert_query, " Failed</p>";
                } else {
                    //Successful 
                    echo "<p>Account has been registered</p>";
                }
            }
        }
    }

    ?>
</body>

</html>
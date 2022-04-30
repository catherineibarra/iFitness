<?php
include('error.php');

//initialize variable from register.php
if($register == true){

    $firstname = strtolower($_POST["firstname"]);
    $lastname = strtolower($_POST["lastname"]);
    $email = strtolower($_POST["email"]);
    $username = strtolower($_POST["username"]);
    $password = ($_POST["password"]);
    $rep_pass = ($_POST["passreapeat"]);
    $question = $_POST["question"];
    $answer = strtolower($_POST["answer"]);
    
    //error message
    $error_message = "";
    
    
    //encrypting password
    $encrypt_code = md5($username);
    
    $salt = sha1(md5($password)) . $encrypt_code;
    $encrypt = hash('sha256', $password . $salt);
    
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
            $exist_uname = "*Username already exist. Please try another Username.";
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
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    }
}
}
?>

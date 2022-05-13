<?php
 include('access.php');
?>
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

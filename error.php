<?php

//Empty strings 
$firstnameerr = "";
$lastnameerr = "";
$emailerr = "";
$usernameerr = "";
$passworderr = "";
$rep_passerr = "";
$answererr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //safety checks
    $register = true;


    //checks if first name is empty
    if (empty($_POST["firstname"])) {
        $firstnameerr = "*First Name is required";
        $register = false;
    } else {
        //test function for code
        $firstname = test_input($_POST["firstname"]);
        //checks if starts with space
        if (ctype_space($_POST["firstname"])) {
            $firstnameerr = "*Starts with a white spaces";
        }
        //function pattern checker
        if (!preg_match("/^[a-zA-Z-']*$/", $firstname)) {
            $firstnameerr = "*No special character or white spaces";
            $register = false;
        }
    }
    //checks if last name is empty
    if (empty($_POST["lastname"])) {
        $lastnameerr = "*Last Name is required";
        $register = false;
    } else {
        //test function for code
        $lastname = test_input($_POST["lastname"]);
        //checks if starts with space
        if (ctype_space($_POST["lastname"])) {
            $lastnameerr = "*Starts with a white spaces";
        }
        //function pattern checker
        if (!preg_match("/^[a-zA-Z-']*$/", $lastname)) {
            $lastnameeerr = "*No special character or white spaces";
            $register = false;
        }
    }
    //checks if email is empty
    if (empty($_POST["email"])) {
        $emailerr = "*Email address is required";
        $register = false;
    } else {
        //test function for code
        $email = test_input($_POST["email"]);
        //validate email checker
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerr = "*Invalid Email format";
            $register = false;
        }
    }
    //checks if username is empty
    if (empty($_POST["username"])) {
        $usernameerr = "*Username is required";
        $register = false;
    } else {
        //test function for code
        $username = test_input($_POST["username"]);
        //checks if starts with space
        if (ctype_space($_POST["username"])) {
            $usernameerr = "*Starts with a white spaces";
        }
    }
    //checks if password is empty
    if (empty($_POST["password"])) {
        $passworderr = "*Password is required";
        $register = false;
    } else {
        //test function for code
        $password = test_input($_POST["password"]);
    }
    //checks if repeat password is empty
    if (empty($_POST["passreapeat"])) {
        $rep_passerr = "*Password is required";
        $register = false;
    } else {
        //test function for code
        $rep_pass = test_input($_POST["passreapeat"]);
    }

    //checks if password matches with reapeat password to proceed 
    if ($_POST["password"] != $_POST["passreapeat"]) {
        $no_match = "*Password does not match. Please enter the same password";
        $register = false;
    }

    //checks if answer is empty
    if (empty($_POST["answer"])) {
        $answererr = "*Answer is required";
        $register = false;
    } else {
        //test function for code
        $answer = test_input($_POST["answer"]);
        //checks if starts with space
        if (ctype_space($_POST["answer"])) {
            $answererr = "*starts with a white spaces";
        }
        // function pattern chceker
        if (!preg_match("/^[a-zA-Z-']*$/", $answer)) {
            $answererr = "*No special character or white spaces";
            $register = false;
        }
    }
}

//reset function to empty on register.php page
if (isset($_POST['reset'])) {
    $firstname = "";
    $lastname = "";
    $email = "";
    $username = "";
    $password = "";
    $rep_pass = "";
    $question = "";
    $answer = "";
    $firstnameerr = "";
    $lastnameerr = "";
    $emailerr = "";
    $usernameerr = "";
    $passworderr = "";
    $rep_passerr = "";
    $answererr = "";
    $no_match = "";
    $register = false;
}


//functional check for user input
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

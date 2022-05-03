<?php 


$firstnameerr = "";
$lastnameerr = "";
$emailerr = "";
$usernameerr = "";
$passworderr = "";
$rep_passerr = "";
$answererr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $register = true;
    //first name


    if(empty($_POST["firstname"])){
        $firstnameerr = "*First Name is required";
        $register = false;
        
    }else{
        $firstname = test_input($_POST["firstname"]);

        if(ctype_space($_POST["firstname"])){
            $firstnameerr = "*Starts with a white spaces";
        }
    
        if(!preg_match("/^[a-zA-Z-']*$/",$firstname)){
            $firstnameerr = "*No special character or white spaces";
            $register = false;
        }
    }
    //last name
    if(empty($_POST["lastname"])){
        $lastnameerr = "*Last Name is required";
        $register = false;
        
    }else{
        $lastname = test_input($_POST["lastname"]);

        if(ctype_space($_POST["lastname"])){
            $lastnameerr = "*Starts with a white spaces";
        }

        if(!preg_match("/^[a-zA-Z-']*$/",$lastname)){
            $lastnameeerr = "*No special character or white spaces";
            $register = false;
        }
    }
    //email
    if(empty($_POST["email"])){
        $emailerr = "*Email address is required";
        $register = false;
        
    }else{
        $email = test_input($_POST["email"]);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailerr = "*Invalid Email format";
            $register = false;
        }

        
    }
    //username
    if(empty($_POST["username"])){
        $usernameerr = "*Username is required";
        $register = false;
    }else{
        $username = test_input($_POST["username"]);

        if(ctype_space($_POST["username"])){
            $usernameerr = "*Starts with a white spaces";
        }
    }
    //password
    if(empty($_POST["password"])){
        $passworderr = "*Password is required";
        $register = false;
        
    }else{
        $password = test_input($_POST["password"]);
    }
    //password repeat
    if(empty($_POST["passreapeat"])){
        $rep_passerr = "*Password is required";
        $register = false;
        
    }else{
        $rep_pass = test_input($_POST["passreapeat"]);
    }

    if ($_POST["password"] != $_POST["passreapeat"]) {
            $no_match = "*Password does not match. Please enter the same password";
        $register = false;
    }


    //answer
    if(empty($_POST["answer"])){
        $answererr = "*Answer is required";
        $register = false;
        
    }else{
        $answer = test_input($_POST["answer"]);

        if(ctype_space($_POST["answer"])){
            $answererr = "*starts with a white spaces";
        }
            
        if(!preg_match("/^[a-zA-Z-']*$/",$answer)){
            $answererr = "*No special character or white spaces";
            $register = false;
        }
    }
}

if(isset($_POST['reset'])){
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



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

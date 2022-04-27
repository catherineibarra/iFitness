<?php
session_start();


if(!isset($_SESSION['logged'])){
  include('loginerror.php');
}



//login details for database
require_once('../../conf/sdp.inc.php');
$conn = @mysqli_connect(
  $sql_host,
  $sql_user,
  $sql_pass,
  $sql_db
);
//if user clicks logout
if (isset($_GET['logout']) && $_GET['logout'] == "logout") :
  session_destroy();
  header("location: index.php");
  exit;
endif;
// if user clicks on profile
if (isset($_GET['profile']) && $_GET['profile'] == "profile") :
  header("location: profile.php");
  exit;
endif;

//checks if set only
if (isset($_POST) & !empty($_POST)) {


  //login processes
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = ($_POST['password']);
  //encrypt password checker matcher
  $encrypt_code = md5($username);

  $salt = sha1(md5($password)) . $encrypt_code;
  $encrypt = hash('sha256', $password . $salt);


  $sql = "SELECT * FROM `$sql_table` WHERE u_name ='$username' AND p_word='$encrypt'";
  // from database
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)) {
    $_SESSION['_reg'] = $_POST['username'];
    $_SESSION['username'] = $username; // <-trying to determine this variable
    $_SESSION['logged'] = $insession = true;
    echo "<script>window.open('profile.php','_self')</script>";
  } else {
    if (empty($usernameerr) && empty($passworderr)) {

      $fmsg = "Username or Password did not match";
    } else
      $fmsg = "";
  }
}
//set username 
$isLoggedIn = isset($_SESSION['_reg']);

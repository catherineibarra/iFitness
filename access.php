<?php
session_start(); 

  //login details for database
  require_once('../../conf/sqlinfo.inc.php');
  $conn = @mysqli_connect(
    $sql_host,
    $sql_user,
    $sql_pass,
    $sql_db
  );

  if(isset($_GET['logout']) && $_GET['logout'] == "logout"):
    session_destroy();
    header("location: index.php");
    exit;
  endif;

if(isset($_POST) & !empty($_POST)){


$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = ($_POST['password']);

$encrypt = hash('sha256', $password);


$sql = "SELECT * FROM `$sql_table` WHERE u_name ='$username' AND p_word='$encrypt'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)){
    $_SESSION['_reg'] = $_POST['username'];
    $_SESSION['username'] = $username; // <-trying to determine this variable
    echo "<script>window.open('index.php','_self')</script>";

    
}else{
    $fmsg = "didnt not get in. ";
}
}

$isLoggedIn = isset($_SESSION['_reg']);
?>
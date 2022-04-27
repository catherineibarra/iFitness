<?php
$usernameerr = "";
$passworderr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insession = true;
//username
  if (empty($_POST["username"])) {
    $usernameerr = "Username is required";
    $insession = false;
  } else {
    $username = test_input($_POST["username"]);
  }
  //password
  if (empty($_POST["password"])) {
    $passworderr = "Password is required";
    $insession = false;
  } else {
    $password = test_input($_POST["password"]);
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
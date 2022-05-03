<?php
session_start();
include('access.php');

$id = $_GET['id'];
$quantity=$_GET['quantity'];
$u_name = $_SESSION['_reg'];

$sql = "UPDATE cart SET quantity = '$quantity' WHERE id = '$id' and u_name = '$u_name';";
mysqli_query($conn, $sql);
echo "<script>window.open('cart.php','_self')</script>";
?> 

<?php
session_start();
include('access.php');

$id = $_GET['id'];
$u_name=$_SESSION['_reg'];

$sql = "DELETE FROM ordermain WHERE id = '$id';";

mysqli_query($conn, $sql);
echo "<script>window.open('order.php','_self')</script>";
?> 

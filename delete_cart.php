<?php
session_start();
include('access.php');

$id = $_GET['id'];
$u_name=$_SESSION['_reg'];

if ($id == 'all') {
    $sql = "DELETE FROM cart WHERE u_name = '$u_name';";
} else {
    $sql = "DELETE FROM cart WHERE id = '$id' and u_name = '$u_name';";
}

mysqli_query($conn, $sql);
echo "<script>window.open('cart.php','_self')</script>";
?>
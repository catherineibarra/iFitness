<?php
session_start();
include('access.php');

$product_id = $_GET['product_id'];

$product_query = "SELECT * FROM products WHERE id = '$product_id';";
$product_results = mysqli_query($conn, $product_query);
while ($row = mysqli_fetch_assoc($product_results))
{
  $u_name=$_SESSION['_reg'];
  $name=$row['name'];
  $price=$row['price'];
  $image=$row['image'];
  $quantity=$_GET['quantity'];
  $sql = "INSERT INTO cart (u_name, name, price, image, quantity) VALUES ('$u_name', '$name', '$price', '$image', '$quantity');";
  mysqli_query($conn, $sql);
  echo "<script>window.open('cart.php','_self')</script>";
  break;
}
?>










 



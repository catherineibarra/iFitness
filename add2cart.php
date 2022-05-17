<?php
session_start();
include('access.php');

//get varaibles from product page
$product_id = $_GET['product_id'];
$quantity=$_GET['quantity'];
$u_name = $_SESSION['_reg'];

//check cart for item
$check_cart_query ="SELECT * FROM cart WHERE id = '$product_id';";
$check_cart_results = mysqli_query($conn, $check_cart_query);

if(mysqli_num_rows($check_cart_results)){
while ($row = mysqli_fetch_assoc($check_cart_results)){
  $update_quantity = $row['quantity'];
  $update_quantity += $quantity;
  
  //query for updating quantity 
  $update_sql = "UPDATE cart SET `quantity` = $update_quantity WHERE id = '$product_id' and u_name = '$u_name';";
  $updated = mysqli_query($conn, $update_sql);

  if(!$updated){
    echo "failed to update";
    echo $update_quantity;
  }else{
    echo "<script>window.open('cart.php','_self')</script>";
  }
}

}else{

  
  $product_query = "SELECT * FROM products WHERE id = '$product_id';";
  $product_results = mysqli_query($conn, $product_query);
  while ($row = mysqli_fetch_assoc($product_results))
  {
    $u_name=$_SESSION['_reg'];
    $name=$row['name'];
    $price=$row['price'];
    $image=$row['image'];
    $sql = "INSERT INTO cart (id, u_name, name, price, image, quantity) VALUES ('$product_id', '$u_name', '$name', '$price', '$image', '$quantity');";
    mysqli_query($conn, $sql);
    echo "<script>window.open('cart.php','_self')</script>";
    break;
  }
}

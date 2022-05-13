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

//checks if table products exists
$products_table_exists = mysqli_query($conn, "SELECT * FROM products;");
if(!$products_table_exists){
  //query for creating table
  $create_product_table = "CREATE TABLE IF NOT EXISTS `products` (`id` int(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,`name` varchar(100) NOT NULL,`price` varchar(100) NOT NULL,`image` varchar(100) NOT NULL);";
  mysqli_query($conn, $create_product_table);

  //insert information into product table
  $create_product =   "INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
  (null, 'Ghost 100% Whey Protein 2lb', '60.21', './images/pd1.jpg'), 
  (null, 'Musashi High Protein Chocolate 2kg', '76.59', './images/pd2.jpg'),
  (null, 'Muscle Matrix - 60 vcaps (25mg per capsule)', '109.00', './images/pd3.jpg'),
  (null, 'Scream Supps PINHEAD 1 Serve Sample', '59.99', './images/pd4.jpg'),
  (null, 'NIVERSAL ANIMAL ENERGY 60 CAPSUL', '29.00', './images/pd5.jpg'),
  (null, 'PREMIUM HERBAL SUPPLEMENTS', '39.00', '../images/pd6.jpg'),
  (null, 'Cellucor C4 Original ID 60 Serves', '68.90', './images/pd7.jpg'),
  (null, 'Rich Piana 5% Nutrition Freak Show', '78.90', './images/pd8.jpg'),
  (null, 'Muscle Builder 90 capsules', '77.00', './images/pd9.jpg'),
  (null, 'EHP Labs OxyShred Thermogenic Fat Burner', '79.89', './images/pd140.jpg'), ## 10 items

  (null, 'Fusion Push-up Workout Set', '69.99', './images/pd111.jpg'),
  (null, 'WalkingPad Foldable Treadmill', '1099.00', './images/pd120.jpg'),
  (null, 'Two Person Station Multi Gym/Station With Smith Machine', '2037.00', './images/pd102.png'),
  (null, 'Thigh Toner Workout Equipment For Women', '24.97', './images/pd130.jpg'),
  (null, 'Sports Suits For Women', '169.99', './images/pd150.jpg'),
  (null, 'Gym Long Sleeve Top', '129.99', './images/pd162.jpg'),
  (null, 'Sport Suit Workout Sportswear', '102.00', './images/pd170.jpg'),
  (null, 'Dark Grey Marl For Men', '109.00', './images/pd180.jpg'),
  (null, 'Charcoal Marl For Men', '179.99', './images/pd190.jpg'),
  (null, 'MP Men`s Linear Mark Graphic Training 1/4 Zip - Ice Blue', '200', './images/pd201.jpg'), ## 20 items

  (null, 'Rockit Dumbbell Rack', '702', './images/pd210.jpg'),
  (null, 'Home Gym Power Tower Fitness Workout Equipment Height Adjustable Chin Pull Up Bar Dip Station Weight Bench', '319.97', './images/pd220.jpg'),
  (null, 'Muliti Gym 3 Station Jx930 158LBS (72KG) Stack Weights JX Fitness Home GYM', '1299', './images/pd230.jpg'),
  (null, 'Gym Weight Training Exercise Equipment Strength Machine', '369.99', './images/pd240.jpg'),
  (null, 'Genki Magnetic Cross Trainer Elliptical Trainer Machine Home Gym Equipment with LED Display', '39.88', './images/pd250.jpg'),
  (null, 'Genki Exercise Bike Spin Stationary Shock Absorbing Home Gym Fitness Equipment Adjustable Magnetic Resistance', '379.97', './images/pd260.jpg'),
  (null, '7-In-1 Weight Bench Multi-Function Power Station Fitness Gym Equipment', '150.30', './images/pd270.jpg'),
  (null, 'Centra Magnetic Rowing Machine 8 Level Resistance Exercise Fitness Home Gym', '420.00', './images/pd280.jpg'),
  (null, 'Push Up Bracket', '35.00', './images/pd290.jpg'),
  (null, 'Wall Mounted Pull Up Multi Function Home Gym Exercise Fitness Indoor Exercise Equipment Gym House Fitness US STORE', '756.99', './images/pd300.jpg');"; ## 30 items

//query run
mysqli_query($conn, $create_product);
  
}
//checks if cart table exist
$cart_table_exist = mysqli_query($conn, "SELECT * FROM cart");

//create table if does not exist 
if(!$cart_table_exist){
  $create_cart_table = "CREATE TABLE IF NOT EXISTS `cart` (`id` int(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,`u_name` varchar(100) NOT NULL,`name` varchar(100) NOT NULL,`price` varchar(100) NOT NULL,`image` varchar(100) NOT NULL,`quantity` int(100) NOT NULL);";
  //runs query
  mysqli_query($conn, $create_cart_table);
}


//checks if set only
if (isset($_POST) & !empty($_POST)) {


  //login processes
  $username = strtolower(mysqli_real_escape_string($conn, $_POST['username']));
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

      $fmsg = "*Username or Password did not match";
    } else
      $fmsg = "";
  }
}
//set username 
$isLoggedIn = isset($_SESSION['_reg']);

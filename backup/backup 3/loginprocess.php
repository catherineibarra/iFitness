<!DOCTYPE htmlPUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Login Processes</title>
</head>

<body>

  <?php
  //initialize varables from searchstatusform.html
  $username = $_GET["username"];
  $password = $_GET["password"];

  $encrypt = hash('sha256', $password);


  //login details for database
  require_once('../../conf/sdp.inc.php');
  $conn = @mysqli_connect(
    $sql_host,
    $sql_user,
    $sql_pass,
    $sql_db
  );


  if ($conn) {
    // DATABASE CONNECTED!

    // check if database table exists
    $table_exists = mysqli_query($conn, "SELECT * FROM $sql_table;");
    if (!$table_exists) {
      echo "<p>Error: no records of database</p>";
    } else {
      //database table exist

      //checks all from database table where column Status has a certain keyword searched by user
      $check_query = "SELECT u_name, p_word FROM $sql_table WHERE u_name ='$username' AND p_word ='$encrypt'";
      $search_results = mysqli_query($conn, $check_query);
      $check = mysqli_fetch_array($search_results);

      if (isset($check)) {
        // show error no matches found in database table with user keyword
        echo "username and password found";
      } else {
        echo "<p>Username or password does not match</p>";
      }
    }
  } else {
    // database error message
    echo "<p>Database connection failure</p>";
  }
  //close results and connections
  ?>
</body>

</html>
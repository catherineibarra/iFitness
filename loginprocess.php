<!DOCTYPE html>
<head>
  <title>Login Status</title>
</head>
<body>
  <?php
  require_once();
  
  $conn = @mysql_connect($sql_host,$sql_user,$sql_pass,$sql_db);
 
  if(!conn){
  echo"<p>failed to connect</p>";  
  } else {
    $user = $_POST[];
    $pass = $_POST[];
    
    $query = "SELECT * FROM account WHERE username='$user' AND password='$pass'");

  }
  ?>
</body>
</html>

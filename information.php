<?php
require('access.php');

require_once('../../conf/sdp.inc.php');
$conn = @mysqli_connect(
  $sql_host,
  $sql_user,
  $sql_pass,
  $sql_db
);

$username = $_SESSION["_reg"];

if ($conn) {
  // DATABASE CONNECTED!

  // check if database table exists
  $table_exists = mysqli_query($conn, "SELECT * FROM $sql_table;");
  if (!$table_exists) {
      echo "<p>Error: no records of database</p>";
  } else {
      //checks if user enters empty space.
          //database table exist

          //checks all from database table where column Status has a certain keyword searched by user
          $search_query = "SELECT * FROM $sql_table WHERE u_name = '$username'";
          $search_results = mysqli_query($conn, $search_query);

          if (!mysqli_num_rows($search_results)) {
              // show error no matches found in database table with user keyword
              echo "profile not found not found";
          } else {

              //getting results from sql
              while ($row = mysqli_fetch_array($search_results)) {

                $f_name = $row["f_name"];
                $l_name = $row["l_name"];
                $email = $row["email"];
                $u_name = $row["u_name"];
                $p_word = $row["p_word"];
                $question = $row["question"];
                $answer = $row["answer"];
              }


          }
      
  }
} else {
  // database error message
  echo "<p>Database connection failure</p>";
}
      ?>
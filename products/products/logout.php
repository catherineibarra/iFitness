<?php
  if(isset($_GET['logout']) && $_GET['logout'] == "logout"):
    session_destroy();
    header("location: ../index.php");
    exit;
  endif;
?>
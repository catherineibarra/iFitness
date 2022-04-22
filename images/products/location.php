<?php
  if(isset($_GET['logout']) && $_GET['logout'] == "logout"):
    session_destroy();
    header("location: ../index.php");
    exit;
  endif;

  if(isset($_GET['profile']) && $_GET['profile'] == "profile"):
    header("location: ../profile.php");
    exit;
  endif;

?>
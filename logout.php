<?php
  session_start();

  echo "Logout Successfully ";
  session_destroy(); // function that destroys session_start
  header("Location: login.php");


 ?>

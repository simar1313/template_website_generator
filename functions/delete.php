<?php
session_start();
  //echo $_SESSION['use']; die;
  if(!isset($_SESSION['use'])) {
    header("Location: ../login.php");
  }

 ?>

<?php

require('database.php');

if(isset($_POST)){

  $id = $_POST["id"];

  $database = new Database();
  $database->delete($id);


}



 ?>

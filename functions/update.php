<?php

require_once('database.php');

$database = new Database();

if(isset($_POST)){

//$id = $_GET['id'];
$database = new Database();


$keys = [];
$values = [];
foreach ($_POST as $key => $value) {
  if (isset($value)) {
    array_push($keys, $key);
    array_push($values, $value);
  }
}


 $database->update($keys,$values);

}




?>

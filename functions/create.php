<?php

  require_once('database.php');







/*

  if(isset($_POST['Page-1-Main-Title']) &&
  isset($_POST['Page-1-Paragraph']) &&
  isset($_POST['Page-2-Main-Title']) &&
  isset($_POST['Page-2-Paragraph']) &&
  isset($_POST['img']) &&
  isset($_POST['font-awesome-img1']) &&
  isset($_POST['title1']) &&
  isset($_POST['Paragraph1']) &&
  isset($_POST['font-awesome-img2']) &&
  isset($_POST['title2']) &&
  isset($_POST['Paragraph2']) &&
  isset($_POST['font-awesome-img3']) &&
  isset($_POST['title3']) &&
  isset($_POST['Paragraph3']) &&
  isset($_POST['font-awesome-img4']) &&
  isset($_POST['title4']) &&
  isset($_POST['Paragraph4']) &&
  isset($_POST['font-awesome-img5']) &&
  isset($_POST['title5']) &&
  isset($_POST['Paragraph5']) &&
  isset($_POST['font-awesome-img6']) &&
  isset($_POST['title5']) &&
  isset($_POST['Paragraph6']) &&
  isset($_POST['page-4-Title']) &&
  isset($_POST['page-4-Paragraph']) &&
  isset($_POST['Div-Card-1-image']) &&
  isset($_POST['Div-Card-1-Title']) &&
  isset($_POST['Div-Card-1-Paragraph']) &&
  isset($_POST['Div-Card-2-image']) &&
  isset($_POST['Div-Card-2-Title']) &&
  isset($_POST['Div-Card-2-Paragraph']) &&
  isset($_POST['Div-Card-3-image']) &&
  isset($_POST['Div-Card-3-Title']) &&
  isset($_POST['Div-Card-3-Paragraph']) &&
  isset($_POST['Div-Card-4-image']) &&
  isset($_POST['Div-Card-4-Title']) &&
  isset($_POST['Div-Card-4-Paragraph']) &&
  isset($_POST['Div-Card-5-image']) &&
  isset($_POST['Div-Card-5-Title']) &&
  isset($_POST['Div-Card-5-Paragraph']) &&
  isset($_POST['Div-Card-6-image']) &&
  isset($_POST['Div-Card-6-Title']) &&
  isset($_POST['Div-Card-6-Paragraph']) &&
  isset($_POST['Banner-Text'])) {

    $Page1MainTitle = $_POST['Page-1-Main-Title'];
    $Page1Paragraph = $_POST['Page-1-Paragraph'];
    $Page2MainTitle = $_POST['Page-2-Main-Title'];
    $Page2Paragraph = $_POST['Page-2-Paragraph'];
    $img = $_POST['img'];
    $fontawesomeimg1 = $_POST['font-awesome-img1']);
    $title1 = $_POST['title1'];
    $Paragraph1 = $_POST['Paragraph1'];
    $fontawesomeimg2 = $_POST['font-awesome-img2'];
    $title2 = $_POST['title2'];
    $Paragraph2 = $_POST['Paragraph2'];
    $fontawesomeimg3 = $_POST['font-awesome-img3'];
    $title3 = $_POST['title3'];
    $Paragraph3 = $_POST['Paragraph3'];
    $fontawesomeimg4 = $_POST['font-awesome-img4'];
    $title4 = $_POST['title4'];
    $Paragraph4 = $_POST['Paragraph4'];
    $fontawesomeimg5 = $_POST['font-awesome-img5'];
    $title5 = $_POST['title5'];
    $Paragraph5 = $_POST['Paragraph5'];
    $fontawesomeimg6 = $_POST['font-awesome-img6'];
    $title5 = $_POST['title5'];
    $Paragraph6 = $_POST['Paragraph6'];
    $page4Title = $_POST['page-4-Title'];
    $DivCard1image = $_POST['Div-Card-1-image'];

*/

//$data = json_decode($_POST);
$keys = [];
$values = [];
foreach ($_POST as $key => $value) {
  if (isset($value)) {
    array_push($keys, $key);
    array_push($values, $value);
  }
}

//print_r($keys);
//echo "<br>";
//print_r($values);

 $database = new Database();
$database->insert($keys, $values);


    //$database->insertnew($_POST,$keys,$values);


//var_dump($_POST); die;
//  if(isset($_POST['data'])){

    //$data = $_POST['data'];

  //  echo 'This Works';
  //}


/*

    $data = array("Volvo", "BMW", "Toyota");

    $cmd = new Database();

    $data->


  } else {
    echo "There is an error!";
  }

*/




 ?>

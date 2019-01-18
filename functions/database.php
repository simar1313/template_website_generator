<?php

class Database{

//public $connection;





public function __construct(){


  //$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

  //return $this->connection;


  $servername = "localhost";
  $username = "root";
  $password = "";
  $myDB = "website_generator";

  try {
      $this->connection = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
      // set the PDO error mode to exception
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "Connected successfully";
      return $this->connection;
      }
  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }

  }


  public function insert($keys, $values){

      //$bind_param_array = array();
      $amended_keys = array();
      //$executed_array = array();
      $filteredValues = array();

      foreach ($keys as $key){


        $key = substr_replace(substr_replace($key, '`',0,0), '`',strlen($key) + 1,0);
        $key = str_replace("-","_",$key);
        $key = preg_replace('/\s+/', '', $key);

        array_push($amended_keys, $key);


      }




      /*
        foreach ($keys as $bind_param){

          $bind_param = substr_replace(substr_replace($bind_param, "'", 0,0), "'",strlen($bind_param) + 1,0);

          array_push($bind_param_array, $bind_param);
        }

      */

    $key = implode(',', $amended_keys);

  //$bind_param_array_insert = implode(',', $bind_param_array);



      foreach ($values as $value) {



          $value = filter_var($value, FILTER_SANITIZE_STRING);
          $value = substr_replace(substr_replace($value, "'", 0,0), "'",strlen($value) + 1,0);
          $value = stripslashes($value);
          $value = str_replace('C:fakepath',"",$value);
          array_push($filteredValues, $value);


    }

      $value = implode(',', $filteredValues);


    $stmt = $this->connection->prepare("INSERT INTO `my_data` ($key) VALUES ($value)");

      $stmt->execute();

    $this->connection = null;


  }


  public function update($keys,$values){

    $allData = array();
    $id = $values[0];

    $stmt = $this->connection->prepare("SELECT * FROM my_data WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch();


    $n=1;
    $data = 'UPDATE my_data SET ';
    foreach($keys as $key){

      if($key != "id"){

      $key = substr_replace(substr_replace($key, '`',0,0), '`',strlen($key) + 1,0);
      $key = str_replace("-","_",$key);
      $key = preg_replace('/\s+/', '', $key);

      if($values[$n] == ""){
        $values[$n] = $result[$n];
      }


      $value = filter_var($values[$n], FILTER_SANITIZE_STRING);
      $value = substr_replace(substr_replace($value, "'", 0,0), "'",strlen($value) + 1,0);
      $value = stripslashes($value);
      $value = str_replace('C:fakepath',"",$value);
      $n++;

      $element = ''.$key.' = '.$value.'';

      array_push($allData, $element);
    }
  }

    $data .= implode(',', $allData);



    $data .= ' WHERE `id` = '.$id.'';

    //print_r($data);

    //$stmt = $this->connection->prepare("UPDATE my_data SET `Data`=? WHERE `id`=?");
    $stmt = $this->connection->prepare($data);
    //$stmt->bindParam("ss", $value, $id);
    $stmt->execute();

    //$stmt->close();
    $this->connection = null;

  }

  public function read($id){

    $stmt = $this->connection->prepare("SELECT * FROM my_data WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch();
    //print_r($result);
    //echo $result["Data"];
    return $result;
  }

  public function delete($id){

    $stmt = $this->connection->prepare("DELETE FROM my_data WHERE `id`= :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    //$stmt->close();
    $this->connection = null;

  }

  public function selectAll(){

    $stmt = $this->connection->query("SELECT * FROM my_data")->fetchAll();

    return $stmt;

  }

  public function getMaxId(){

    $stmt = $this->connection->prepare("SELECT MAX(id) AS max_id FROM my_data");
    $stmt->execute();
    $invNum = $stmt->fetch(PDO::FETCH_ASSOC);
    $max_id = $invNum['max_id'];
    return $max_id;

  }


}




 ?>

<?php

class Conexion{

  public function conectar(){
    $dsn = "mysql:dbname=harcode;host=127.0.0.1;port=3306";
    $usuario = "root";
    $pass = "";

    try {
      $db = new PDO($dsn, $usuario, $pass);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $db;

    } catch (\Exception $e) {

      echo "oh no! Hubo un error :("; exit;
    }
  }

}

 ?>

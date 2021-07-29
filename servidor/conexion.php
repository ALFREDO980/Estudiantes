<?php 

    function conexion(){
      $servidor = "localhost";
      $usuario = "root";
      $password ="";
      $db = "registro_personas";

      $conexion = mysqli_connect($servidor, $usuario, $password, $db);
      return $conexion;
    }
?>

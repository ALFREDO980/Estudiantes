<?php
  
  $nombre = $_POST['nombre'];
  $paterno = $_POST['paterno'];
  $materno = $_POST['materno'];
  $fecha = $_POST['fecha'];
  $matricula = $_POST['matricula'];
  $genero = $_POST['genero'];
  $especialidad = $_POST['especialidad'];
  $imagen = $_POST['imagen'];
  include "conexion.php";
  $conexion = conexion();

  $sql = "INSERT INTO t_registro (nombre, paterno, materno, fecha,
                       matricula, genero, especialidad, imagen)
   VALUES ( '$nombre', 
            '$paterno', 
            '$materno', 
            '$fecha', 
            '$matricula',
            '$genero',
            '$especialidad',
            '$imagen')";
  $respuesta = mysqli_query($conexion, $sql);

  if($respuesta){
    header("location:../index.php");
  }else{
    echo "No jalo algo anda mal...";
  }


?> 
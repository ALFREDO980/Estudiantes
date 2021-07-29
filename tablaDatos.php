<?php 
  include "servidor/conexion.php";
  $conexion = conexion();
  $sql = "SELECT id_registro, nombre, paterno, materno, fecha, matricula, genero, especialidad,
  imagen FROM t_registro";
  $respuesta = mysqli_query($conexion, $sql);
?>

<table class="table table-dark table-hover">
  <thead>
    <th>ID</th>
    <th>Apellido paterno</th>
    <th>Apellido materno</th>
   <th>Nombre</th>
   <th>Edad</th>
   <th>Matricula</th>
   <th>Especialidad</th> 
   <th>Sexo</th> 
   <th>imagen</th> 
   <th>Eliminar</th> 
  </thead>
  <tbody>
  <?php 
       while($mostrar = mysqli_fetch_array($respuesta)) {  
    ?>
    <tr>
      <td><?php echo $mostrar['id_registro'];?></td>
      <td><?php echo $mostrar['paterno'];?></td>
      <td><?php echo $mostrar['materno'];?></td>
      <td><?php echo $mostrar['nombre'];?></td>
      <td><?php echo $mostrar['fecha'];?></td>
      <td><?php echo $mostrar['matricula'];?></td>
      <td><?php echo $mostrar['especialidad'];?></td>
      <td><?php echo $mostrar['genero'];?></td>
      <td><?php echo $mostrar['imagen'];?></td>
      <td>
        <form action="servidor/eliminarDato.php" method="POST">
          <input type="text" hidden name="idDato" value="<?php echo $mostrar['id_registro']?>">
          <button class="btn btn-danger">Eliminar</button>
        </form>
      </td>
    </tr>
    <?php
         }
      ?>
  </tbody>

</table>
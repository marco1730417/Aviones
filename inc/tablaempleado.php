<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table">
    <tr>
      <th>Id empleado</th>
      <th>Nombre Empleado</th>
      <th>Direccion Empleado</th>
      <th>Telefono Empleado</th>
      <th>Cargo</th>
   


    </tr>
    <tr>
<?php
$query="select * from empleado,poliza,cargo where empleado.id_poliza=poliza.id_poliza and empleado.id_cargo=cargo.id_cargo";
  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
  echo "<tr><td>".$filas["id_empleado"]."</td>";
  echo "<td>".$filas["nombre_empleado"]."</td>";
  echo "<td>".$filas["direccion_empleado"]."</td>";
  echo "<td>".$filas["telefono_empleado"]."</td>";
  echo "<td>".$filas["nombre_cargo"]."</td></tr>";


}}else {
  echo "no hay datos";} ?>
</tr>

  </table>

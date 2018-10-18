<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table-all">
    <tr>
      <th>ID_POLIZA</th>
      <th>CODIGO POLIZA</th>
      <th>NOMBRE POLIZA</th>
      <th>FECHA INICIO</th>
      <th>FECHA FIN</th>
      <th>NOMBRE EMPLEADO</th>
      <th>DIRECCION EMPLEADO</th>
      <th>CARGO</th>



    </tr>
    <tr>
<?php
$query="select * from poliza,empleado,cargo where poliza.id_poliza=empleado.id_poliza and cargo.id_cargo=empleado.id_cargo";
  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
  echo "<tr><td>".$filas["id_poliza"]."</td>";
  echo "<td>".$filas["codigo_poliza"]."</td>";

  echo "<td>".$filas["nombre_poliza"]."</td>";
  echo "<td>".$filas["fecha_inicio"]."</td>";
  echo "<td>".$filas["fecha_fin"]."</td>";
  echo "<td>".$filas["nombre_empleado"]."</td>";
  echo "<td>".$filas["direccion_empleado"]."</td>";
  echo "<td>".$filas["nombre_cargo"]."</td>";

}}else {
  echo "no hay datos";} ?>
</tr>

  </table>

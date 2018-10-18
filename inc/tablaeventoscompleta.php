<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table">
    <tr>
      <th>Id aeronave</th>
      <th>Matricula</th>
      <th>Nombre Aeronave</th>
      <th>Id_Estado</th>

    </tr>
    <tr>
<?php
$query="select * from aeronave,estado where aeronave.id_estado=estado.id_estado";

  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
  echo "<tr><td>".$filas["id_aeronave"]."</td>";
  echo "<td>".$filas["matricula"]."</td>";
  echo "<td>".$filas["nombre_aeronave"]."</td>";
  echo "<td>".$filas["nombre_estado"]."</td></tr>";
}}else {
  echo "no hay datos";} ?>
</tr>

  </table>

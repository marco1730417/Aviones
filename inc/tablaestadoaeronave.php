<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table-all">
    <tr>
  <th>ID_AERONAVE</th>
      <th>MATRICULA</th>
<th>POLIZA</th>
</tr>
    <tr>
<?php
$query=" select id_aeronave,matricula,id_poliza from aeronave where aeronave.id_aeronave not
 in (select estado.id_aeronave from estado)";
 
  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
    echo "<tr><td>".$filas["id_aeronave"]."</td>";
      echo "<td>".$filas["matricula"]."</td>";
      echo "<td>".$filas["id_poliza"]."</td></tr>";

}}else {
  echo "no hay datos";} ?>
</tr>

  </table>

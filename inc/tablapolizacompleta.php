<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table-all">
    <tr>
      <th>ID_PÓLIZA</th>
      <th>CÓDIGO PÓLIZA</th>
      <th>NOMBRE PÓLIZA</th>
      <th>FECHA INICIO</th>
      <th>FECHA FIN</th>
      <th>ID_USUARIO</th>
      <th>ID_ASEGURADORA</th>
      <th>VALOR</th>
  </tr>
    <tr>
<?php
$query="select * from poliza";
  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
  echo "<tr><td>".$filas["id_poliza"]."</td>";
  echo "<td>".$filas["codigo_poliza"]."</td>";
  echo "<td>".$filas["nombre_poliza"]."</td>";
  echo "<td>".$filas["fecha_inicio"]."</td>";
  echo "<td>".$filas["fecha_fin"]."</td>";
  echo "<td>".$filas["id_usuario"]."</td>";
  echo "<td>".$filas["id_aseguradora"]."</td>";
  echo "<td>".$filas["valor_poliza"]."</td>";

}}else {
  echo "no hay datos";} ?>
</tr>

  </table>

<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table-all">
    <tr>
      <th>ID_REPUESTO</th>
      <th>NOMBRE REPUESTO</th>
        <th>CÓDIGO REPUESTO</th>
      <th>SERIE REPUESTO</th>
      <th>ID_PÓLIZA </th>




    </tr>
    <tr>
<?php
$query="select * from poliza,repuesto where poliza.id_poliza=repuesto.id_poliza ";
  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
  echo "<tr><td>".$filas["id_repuesto"]."</td>";
  echo "<td>".$filas["nombre_repuesto"]."</td>";

  echo "<td>".$filas["codigo_repuesto"]."</td>";
  echo "<td>".$filas["serie_repuesto"]."</td>";
  echo "<td>".$filas["id_poliza"]."</td>";


}}else {
  echo "no hay datos";} ?>
</tr>

  </table>

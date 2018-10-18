

<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table-all">
    <tr>

      <th>ID_AERONAVE</th>
      <th>MATRICULA</th>

      <th>TIPO_AERONAVE</th>
        <th>POLIZA</th>
      <th>MARCA_AERONAVE</th>





    </tr>
    <tr>
<?php
$query="select * from poliza,aeronave where poliza.id_poliza=aeronave.id_poliza";
  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){

  echo "<td>".$filas["id_aeronave"]."</td>";
  echo "<td>".$filas["matricula"]."</td>";
  echo "<td>".$filas["tipo_aeronave"]."</td>";
    echo "<td>".$filas["id_poliza"]."</td>";
  echo "<td>".$filas["marca_aeronave"]."</td></tr>";


}}else {
  echo "no hay datos";} ?>


</tr>

  </table>

<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table-all">
    <tr>
  <th>ID_POLIZAS</th>
      <th>NOMBRE_POLIZA</th>
>
</tr>
    <tr>
<?php
$query=" select id_poliza,nombre_poliza from poliza where poliza.id_poliza not
 in (select aeronave.id_poliza from aeronave)";
  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);

  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
    echo "<tr><td>".$filas["id_poliza"]."</td>";

      echo "<td>".$filas["nombre_poliza"]."</td></tr>";

}}

else {
  echo "no hay datos";} ?>
</tr>

  </table>

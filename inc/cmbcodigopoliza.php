<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>


<select class="w3-container" name="">


<?php
$query="select * from poliza";
  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
//echo "nombre poliza";
echo '<option selected value="'.$filas["codigo_poliza"].'">'.$filas["codigo_poliza"].'</option> ';

}}else {
  echo "no hay datos";} ?>
</tr>


  </select>

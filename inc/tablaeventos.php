<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table">
    <tr>
      <th>Id siniestro</th>
      <th>Nombre Siniestro</th>
      <th>Id_Poliza</th>
      <th>Codigo_Poliza</th>
    </tr>
    <tr>

      
<?php
$query="select * from siniestro,poliza";
  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
  echo "<tr><td>".$filas["id_siniestro"]."</td>";
  echo "<td>".$filas["nombre_siniestro"]."</td>";
  echo "<td>".$filas["id_poliza"]."</td>";
  echo "<td>".$filas["codigo_poliza"]."</td></tr>";
}}else {
  echo "no hay datos";} ?>
</tr>

  </table>

<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table">
    <tr>
      <th>Id Usuario</th>
      <th>Nombre Usuario</th>
      <th>Usuario</th>


    </tr>
    <tr>
<?php
$query="select * from usuarios";
  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
  echo "<tr><td>".$filas["id_usuario"]."</td>";
  echo "<td>".$filas["nombre_usuario"]."</td>";
  echo "<td>".$filas["username"]."</td></tr>";
}}else {
  echo "no hay datos";} ?>
</tr>

  </table>

<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">

<table class="w3-table-all">
    <tr>
      <th>ID USUARIO</th>
      <th>NOMBRE USUARIO</th>
      <th>ID ASEGURADORA</th>
      <th>NOMBRE ASEGURADORA</th>

    </tr>
    <tr>
<?php
$query="select aseguradora.id_aseguradora,aseguradora.nombre_aseguradora,usuarios.id_usuario,usuarios.nombre_usuario from usuarios,aseguradora";
  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
  echo "<tr><td>".$filas["id_usuario"]."</td>";
  echo "<td>".$filas["nombre_usuario"]."</td>";
  echo "<td>".$filas["id_aseguradora"]."</td>";
  echo "<td>".$filas["nombre_aseguradora"]."</td>";

}}else {
  echo "no hay datos";} ?>
</tr>

  </table>

<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table">
    <tr>

      <th>Id_Aeronave</th>
      <th>Matricula</th>
      <th>Tipo Aeronave</th>
      <th>Estado</th>
      <th>Fecha_Inicial</th>
      <th>Fecha_Final</th>
      <th>Id Poliza</th>
      <th>Codigo_Poliza</th>
      <th>Nombre_Poliza</th>
      <th>Fecha_Final Poliza</th>

    </tr>
    <tr>
<?php


$query="select aeronave.id_aeronave,aeronave.matricula,aeronave.tipo_aeronave,estado.nombre_estado,
estado.fecha_inicio,estado.fecha_fin,poliza.id_poliza,poliza.codigo_poliza,poliza.nombre_poliza,poliza.fecha_fin
from estado,aeronave,poliza
where estado.id_aeronave=aeronave.id_aeronave and aeronave.id_poliza=poliza.id_poliza";


  $resultado=pg_query($conexion,$query)or die ("error");
  $nr=pg_num_rows($resultado);
  if($nr>0){
  while ($filas=pg_fetch_array($resultado)){
  echo "<tr><td>".$filas[0]."</td>";
  echo "<td>".$filas[1]."</td>";
  echo "<td>".$filas[2]."</td>";
  echo "<td>".$filas[3]."</td>";
  echo "<td>".$filas[4]."</td>";
  echo "<td>".$filas[5]."</td>";
  echo "<td>".$filas[6]."</td>";
  echo "<td>".$filas[7]."</td>";
  echo "<td>".$filas[8]."</td>";
  echo "<td>".$filas[9]."</td></tr>";

}}else {
  echo "no hay datos";} ?>
</tr>

  </table>

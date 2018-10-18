<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<div class="w3-container">
<table class="w3-table">
    <tr>
      <th>ID_AERONAVE</th>
        <th>MATRICULA</th>
            <th>FECHA_INICIO</th>
            <th>FECHA FIN</th>
            <th>NOMBRE_ESTADO</th>
          </tr>
          <tr>
      <?php
      $query="select * from estado,aeronave,poliza
      where estado.id_aeronave=aeronave.id_aeronave and poliza.id_poliza=aeronave.id_poliza";

        $resultado=pg_query($conexion,$query)or die ("error");
        $nr=pg_num_rows($resultado);
        if($nr>0){
        while ($filas=pg_fetch_array($resultado)){
        echo "<tr><td>".$filas["id_aeronave"]."</td>";
              echo "<td>".$filas["matricula"]."</td>";
        echo "<td>".$filas["fecha_inicio"]."</td>";
      echo "<td>".$filas["fecha_fin"]."</td>";
        echo "<td>".$filas["nombre_estado"]."</td>";




      }}else {
        echo "no hay datos";} ?>
      </tr>

        </table>

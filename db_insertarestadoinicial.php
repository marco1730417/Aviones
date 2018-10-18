<?php
session_start();
require_once('conexion1.php');
$conexion=conectarDB();

//$poliza1=$_SESSION['poliza'];
$aeronave= $_POST['aeronave'];
$fecha1= $_POST['fecha1'];
$estado= $_POST['estado'];



$ok2=buscaridporpoliza($conexion,$aeronave);
$ok1=buscarfechafinporpoliza($conexion,$ok2);
$ok=insertarEstado($conexion,$aeronave,$fecha1,$ok1,$estado);



if( $ok == false ){
  ?>
<script>
alert('La Aeronave no existe');
window.location.href='asignarestado.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('El estado ha sido guardado');
  window.location.href='asignarestado.php';
  </script>

<?php } ?>

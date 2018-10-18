<?php require_once('conexion1.php');
$conexion=conectarDB();

$nombre= $_POST['nombre'];
$codigo= $_POST['codigo'];
$serie= $_POST['serie'];
$poliza=$_POST['poliza'];


$ok=insertarRepuesto($conexion,$nombre,$codigo,$serie,$poliza);

if( $ok == false ){
  ?>
<script>
alert('El Repuesto no ha sido guardado');
window.location.href='ingresarrepuesto.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('El repuesto ha sido guardado');
  window.location.href='ingresarrepuesto.php';
  </script>

<?php } ?>

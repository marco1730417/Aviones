<?php require_once('conexion1.php');
$conexion=conectarDB();

$nombre= $_POST['nombre'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];
$cargo=$_POST['cargo'];
$poliza=$_POST['poliza'];


$ok=insertarEmpleado($conexion,$nombre,$direccion,$telefono,$cargo,$poliza);

if( $ok == false ){
  ?>
<script>
alert('El Empleado no ha sido guardado');
window.location.href='ingresarempleadonormal.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('El Empleado ha sido guardado');
  window.location.href='ingresarempleadonormal.php';
  </script>

<?php } ?>

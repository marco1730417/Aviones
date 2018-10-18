


<?php require_once('conexion1.php');
$conexion=conectarDB();
$id= $_POST['empleado'];

$ok = buscarEmpleado( $conexion, $id );


if( $ok == false ){
  ?>
<script>
alert('EMPLEADO NO ASEGURADO');
window.location.href='buscarempleado.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('EMPLEADO ASEGURADO');
  window.location.href='buscarempleado.php';
  </script>

<?php } ?>


?>

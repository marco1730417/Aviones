


<?php require_once('conexion1.php');
$conexion=conectarDB();
$id= $_POST['empleado'];

$ok = borrarEmpleado( $conexion, $id );


if( $ok == false ){
  ?>
<script>
alert('el empleado no ha sido borrado');
window.location.href='ingresarempleado.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('el empleado ha sido borrado');
  window.location.href='ingresarempleado.php';
  </script>

<?php } ?>


?>




<?php require_once('conexion1.php');
$conexion=conectarDB();
$id= $_POST['repuesto'];

$ok = borrarRepuesto( $conexion, $id );


if( $ok == false ){
  ?>
<script>
alert('el repuesto no ha sido borrado');
window.location.href='ingresarrepuesto.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('el repuesto ha sido borrado');
  window.location.href='ingresarrepuesto.php';
  </script>

<?php } ?>


?>

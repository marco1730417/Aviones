


<?php require_once('conexion1.php');
$conexion=conectarDB();
$id= $_POST['usuario'];

$ok = borrarpoliza( $conexion, $id );


if( $ok == false ){
  ?>
<script>
alert('la poliza no ha sido borrado');
window.location.href='actualizarpoliza.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('la poliza ha sido borrado');
  window.location.href='actualizarpoliza.php';
  </script>

<?php } ?>


?>




<?php require_once('conexion1.php');
$conexion=conectarDB();
$id= $_POST['aeronave'];

$ok5=buscaraero($conexion,$id);
$ok1 =borrarAeronaveestado( $conexion, $id );
$ok2 =borrarAeronavesiniestro( $conexion, $id );
$ok = borrarAeronave( $conexion, $id );



if($ok5==false){
  ?>
<script>

alert('El Registro no existe');
window.location.href='actualizareliminaraeronave.php';
</script>

<?php  }


else{


if( $ok == false ){
  ?>
<script>
alert('el aeronave no ha sido borrado');
window.location.href='actualizareliminaraeronave.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('el aeronave ha sido borrado');
  window.location.href='actualizareliminaraeronave.php';
  </script>

<?php }} ?>

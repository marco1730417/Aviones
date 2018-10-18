


<?php require_once('conexion1.php');
$conexion=conectarDB();
$id= $_POST['usuario'];


$ok1=buscarusuario($conexion,$id);
$ok = borrarPersona( $conexion, $id );



if($ok1==false){
  ?>
<script>

alert('El Registro no existe');
window.location.href='registrousuarios.php';
</script>

<?php  }


else{

if( $ok == false ){
  ?>
<script>
alert('El Registro no ha sido borrado por que se encuentra en una poliza');
window.location.href='registrousuarios.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('usuario eliminado ');
  window.location.href='registrousuarios.php';
  </script>

<?php }} ?>


?>

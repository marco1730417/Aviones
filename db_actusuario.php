<?php require_once('conexion1.php');
$conexion=conectarDB();

$nombre= $_POST['usuario'];
$nombre1= $_POST['usuarionuevo'];
$apodo= $_POST['apodo'];
$contrasena= $_POST['contrasena'];
//$perfil=$_POST['perfil'];

$ok1=buscarusuario($conexion,$nombre);
$ok=modificarPersona($conexion,$nombre,$nombre1,$apodo,$contrasena,1);


if($ok1==false){
  ?>
<script>

alert('El Registro no existe');
window.location.href='actualizarusuario.php';
</script>

<?php  }


else{

if( $ok == false ){
  ?>
<script>

alert('El Registro no ha sido modificado');
window.location.href='actualizarusuario.php';
</script>

<?php  }
  else { ?>

  <script>
  alert('El Registro ha sido modificado');
  window.location.href='actualizarusuario.php';
  </script>

<?php
}}


?>

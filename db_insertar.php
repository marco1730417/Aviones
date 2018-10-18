<?php require_once('conexion1.php');
$conexion=conectarDB();



$nombre= $_POST['usuario'];
$apodo= $_POST['apodo'];
$contrasena= $_POST['contrasena'];
//$perfil=$_POST['perfil'];

$ok=insertarPersona($conexion,$nombre,$apodo,$contrasena,1);



if( $ok == false ){
  ?>
<script>
alert('El Registro no ha sido guardado');
window.location.href='registrousuarios.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('El Registro ha sido guardado');
  window.location.href='registrousuarios.php';
  </script>

<?php } ?>

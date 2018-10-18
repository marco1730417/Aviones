<?php require_once('conexion1.php');
$conexion=conectarDB();

$codigo= $_POST['aeronave'];
$fecha1= $_POST['fecha1'];
$descripcion= $_POST['descripcion'];

//$ok=insertarPoliza($conexion,$codigo,$nombre,$fecha1,$fecha2,$usuario,$aseguradora,$valor);
$ok=insertarSiniestro($conexion,$fecha1,$descripcion,$codigo);


if( $ok == false ){
  ?>
<script>
alert('El Siniestro ha sido registrado ');
window.location.href='eventosadm.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('El Siniestro ha sido registrado ha sido guardado');
  window.location.href='eventosadm.php';
  </script>

<?php } ?>

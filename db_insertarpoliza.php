<?php require_once('conexion1.php');
$conexion=conectarDB();

$codigo= $_POST['codigo'];
$nombre= $_POST['nombre'];
$fecha1= $_POST['fecha1'];
$fecha2= $_POST['fecha2'];

$usuario=$_POST['usuario'];
$aseguradora=$_POST['aseguradora'];
$valor=$_POST['valor'];
$ok1=compararFechas($fecha2, $fecha1);
$ok=insertarPoliza($conexion,$codigo,$nombre,$fecha1,$fecha2,$usuario,$aseguradora,$valor);

if( $ok1 <0 ){
  ?>
<script>
alert('LA FECHA FINAL DEBE SER MAYOR QUE LA INICIAL');
window.location.href='mantenimiento.php';
</script>

<?php  }
  else
{

if( $ok == false ){
  ?>
<script>
alert('El Registro no ha sido guardado');
window.location.href='mantenimiento.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('El Registro ha sido guardado');
  window.location.href='mantenimiento.php';
  </script>

<?php }} ?>

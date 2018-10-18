<?php require_once('conexion1.php');
$conexion=conectarDB();

$matricula= $_POST['matricula'];
$tipo= $_POST['tipo'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$poliza=$_POST['poliza'];
$valor=$_POST['valor'];
$grupo=$_POST['grupo'];


$ok=insertarAeronave($conexion,$matricula,$tipo,$marca,$modelo,$grupo,$poliza,$valor);

if( $ok == false ){
  ?>
<script>
alert('El aeronave no ha sido guardado');
window.location.href='actualizareliminaraeronave.php';
</script>


<?php
}
  else { ?>
  <script>
  alert('El aeronave ha sido guardado');
  window.location.href='actualizareliminaraeronave.php';
  </script>

<?php } ?>

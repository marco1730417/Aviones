<?php require_once('conexion1.php');
$conexion=conectarDB();
$matricula1= $_POST['matricula1'];
$matricula= $_POST['matricula'];
$tipo= $_POST['tipo'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$poliza=$_POST['poliza'];
$valor=$_POST['valor'];
$grupo=$_POST['grupo'];



$ok1=buscaraero($conexion,$matricula1);
$ok=modificarAeronave($conexion,$matricula1,$matricula,$tipo,$marca,$modelo,$poliza,$valor,$grupo);



if($ok1==false){
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
alert('La aeronave no ha sido modificado');
window.location.href='actualizareliminaraeronave.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('La aeronave Registro ha sido modificado');
  window.location.href='actualizareliminaraeronave.php';
  </script>

<?php }} ?>

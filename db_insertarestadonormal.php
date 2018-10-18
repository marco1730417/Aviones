<?php
session_start();
require_once('conexion1.php');
$conexion=conectarDB();
$poliza1=$_SESSION['poliza'];
$aeronave= $_SESSION['aeronave'];
$fecha1= $_POST['fecha1'];
$estado= $_POST['estado'];

$ok2=buscaridestado( $conexion,$aeronave );
$ok3=modificaresta( $conexion,$fecha1,$ok2 );

// se busca otro id estado luego de haber modificado la fecha ya que sino resta del final de la fecha de poliza
$ok7=buscaridestado( $conexion,$aeronave );
$ok8=buscarvaloraseguradodeaeronave( $conexion, $poliza1 );
$ok4=calculardias($conexion,$ok7);
$ok9=($ok8/365);
$ok10=($ok4*$ok9);
$ok5=modificardias( $conexion,$ok4,$ok7 ,$ok9,$ok10);


$ok1=buscarfechafinporpoliza($conexion,$poliza1);
$ok=insertarEstado($conexion,$aeronave,$fecha1,$ok1,$estado);



/*if( $ok == false ){
       echo "Error al insertar los datos.<br/>";
      // echo $ok;
        //  echo $ok1;
          //   echo $ok2;
            //    echo $ok3;
                //   echo $ok15;
                 }
   else{
       echo "Datos insertados correctamente.<br/>";

       echo "dias";
       echo $ok4;
       echo "diario";
          echo $ok9;
          echo "total";
             echo $ok10;

                //   echo $ok15;
              }*/


if( $ok == false ){
  ?>
<script>
alert('El estado no ha sido guardado');
window.location.href='tablaaeronavesporpoliza.php';
</script>

<?php  }
  else { ?>
  <script>
  alert('El estado ha sido guardado');
  window.location.href='tablaaeronavesporpoliza.php';
  </script>

<?php } ?>

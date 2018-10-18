<?php
session_start();
require_once('conexion1.php');
$estado= $_POST["estado"];

$_SESSION["estado"] = $estado;
$cadena1="Tierra";
$cadena2="Vuelo";
$conexion=conectarDB();
$aeronave= $_SESSION['aeronave'];
$ok20=buscarfecha( $conexion,$aeronave );
echo $ok20;
$fecha1= $_POST['fecha1'];


if($fecha1<$ok20){
  ?>
<script>
alert('LA FECHA DEBE SER MAYOR QUE LA FECHA ANTERIOR');
window.location.href='tablaaeronavesporpolizaadm.php';
</script>

<?php  }

else {




if (strtolower($estado) == strtolower($cadena1)) {

$poliza1=$_SESSION['poliza'];


$estado= $_POST['estado'];
$ok2=buscaridestado( $conexion,$aeronave );

$ok3=modificaresta( $conexion,$fecha1,$ok2 );
$ok7=buscaridestado( $conexion,$aeronave );
$ok8=buscarvaloraseguradodeaeronave( $conexion, $poliza1,$aeronave );
$ok4=calculardias($conexion,$ok7);
$ok9=($ok8/365)*1000;
$ok10=($ok4*$ok9);
$ok5=modificardias( $conexion,$ok4,$ok7 ,$ok9,$ok10);
$ok1=buscarfechafinporpoliza($conexion,$poliza1);
$ok=insertarEstado($conexion,$aeronave,$fecha1,$ok1,$estado);


       if( $ok == false ){
         ?>
       <script>
       alert('El estado no ha sido guardado');
       window.location.href='tablaaeronavesporpolizaadm.php';
       </script>

       <?php  }
         else { ?>
         <script>
         alert('El estado ha sido guardado');
         window.location.href='tablaaeronavesporpolizaadm.php';
         </script>
       <?php } ?><?php

     } // fin de control de cadenas aire o vuelo

            else {
              $conexion=conectarDB();
              $poliza1=$_SESSION['poliza'];
              $aeronave= $_SESSION['aeronave'];
              $fecha1= $_POST['fecha1'];
              $estado= $_POST['estado'];
              $ok2=buscaridestado( $conexion,$aeronave );
              $ok3=modificaresta( $conexion,$fecha1,$ok2 );
              $ok7=buscaridestado( $conexion,$aeronave );
              $ok8=buscarvaloraseguradodeaeronave( $conexion, $poliza1,$aeronave );
              $ok4=calculardias($conexion,$ok7);
              $ok9=($ok8/365)*1000*0.3;
              $ok10=($ok4*$ok9);
              $ok5=modificardias( $conexion,$ok4,$ok7 ,$ok9,$ok10);
              $ok1=buscarfechafinporpoliza($conexion,$poliza1);
              $ok=insertarEstado($conexion,$aeronave,$fecha1,$ok1,$estado);
                     if( $ok == false ){
                       ?>
                     <script>
                     alert('El estado no ha sido guardado');
                     window.location.href='tablaaeronavesporpolizaadm.php';
                     </script>
                     <?php  }
                       else { ?>
                       <script>
                       alert('El estado ha sido guardado');
                       window.location.href='tablaaeronavesporpolizaadm.php';
                       </script>
                     <?php }}}

                     ?>

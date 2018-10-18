
<?php
session_start();


$aeronave= $_POST["aeronav"];
  echo $aeronave ;
  $_SESSION["aeronav"] = $aeronave;


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AREA DE SEGUROS</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="calendario_dw/calendario_dw.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0 ,maximum-scale=1.0, minimum-scale=0">
  </head>
  <style type="text/css">
     body{
        font-family: tahoma, verdana, sans-serif;
     }
     </style>

  <body>
<?php include('inc/header.php') ?>
<?php include('inc/menu.php') ?>

<div class="fila">
  <div class="columna columna-m-12 columna-g-12" >
    <html lang="es">
    <head>
    <title>MANEJO DE POLIZAS</title>
       <link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
       <style type="text/css">

       body{
          font-family: tahoma, verdana, sans-serif;}
       </style>
       <script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
       <script type="text/javascript" src="calendario_dw/calendario_dw.js"></script>

       <script type="text/javascript">
       $(document).ready(function(){
          $(".campofecha").calendarioDW();
       })
       </script>
     </head>

    <body>
      <div class="w3-container  w3-half">
          <div class="w3-container  w3-margin-top">
        <header class="w3-container w3-teal ">
          <h1>DATOS DE CAMBIO</h1>
        </header>
    <form class="w3-container w3-card-4 w3-middle">
  <label>El ID de su aeronave es <?php   echo $aeronave ; ?></label></p> <p>
        <a href="reporteporaeronave.php" class="w3-button w3-indigo">Ver Reporte</a>
    </form>
    </div>
    </div>

  </body>
    </html>

</div>
  </div>
  </div>


</body>
<?php include('inc/footer.php') ?>
<script src="js/base.js"></script>
</html>

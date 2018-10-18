<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ÁREA DE SEGUROS</title>
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
<?php include('inc/menunormal.php') ?>

<div class="fila">
  <div class="columna columna-m-12 columna-g-12" >
    <html lang="es">
    <head>
    <title>REPORTES</title>
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
          <header class="w3-container w3-green ">
                        <h1>LIQUIDACIÓN AERONAVES POR PÓLIZA</h1>
                      </header>

        <form class="w3-container w3-card-4 w3-middle" action="verdatoaeronavepoliza.php"   method="post">
          <input class="w3-input" type="text" style="width:90%" id="poliza"  name="poliza" placeholder="ingrese el ID de la poliza"required>
                <label>ID de la póliza</label></p> <p>

        <button type="submit" class="w3-button w3-indigo ">Consultar Reporte</button>
        </form>
      </div>

  <div class="w3-container  w3-margin-top">
    <header class="w3-container w3-green ">
                  <h1>LIQUIDACION POR AERONAVE</h1>
                </header>

  <form class="w3-container w3-card-4 w3-middle" action="verdatoaeronave.php"   method="post">
    <input class="w3-input" type="text" style="width:90%" id="usuario"  name="aeronav" placeholder="ingrese el ID de la aeronave"required>
          <label>ID de la aeronave</label></p> <p>

  <button type="submit" class="w3-button w3-indigo ">Consultar Reporte </button>
  </form>
</div>




  <div class="w3-container  w3-margin-top">
    <header class="w3-container w3-green ">
                  <h1>LIQUIDACION POR ESTADO DE AERONAVE</h1>
                </header>
  <form class="w3-container w3-card-4 w3-middle" action="verdatoaeronaveestado.php"   method="post">
    <input class="w3-input" type="text" style="width:90%" id="aeronaves"  name="aeronaves"
    placeholder="Ingrese el ID de la aeronave" required>
            <label>ID de la aeronave</label></p> <p>
    <input class="w3-radio" type="radio" name="estado" value="Tierra" checked>
    <label>Tierra</label></p>
    <p>
    <input class="w3-radio" type="radio" name="estado" value="Vuelo">
    <label>Vuelo</label></p>

  <button type="submit" class="w3-button w3-indigo ">Consultar Reporte </button>
  </form>
</div>
</div>

 <div class="w3-container  w3-half">
          <div class="w3-container  w3-margin-top">
        <header class="w3-container w3-teal">
		 <h1>AEROTÉCNICO</h1>
        </header>
      <form class="w3-container w3-card-4 w3-middle"    method="post">
          <h2>Reporte Personal Asegurado</h2>
      <a href="buscarempleadonormal.php" class="w3-button w3-indigo">Buscar Aerotécnico</a>


      </form>
      </div>





  <div class="w3-container  w3-margin-top">
    <header class="w3-container w3-teal ">
                  <h1>SINIESTROS DE AERONAVES</h1>
                </header>
<br></br>
  <form class="w3-container w3-card-4 w3-middle"   method="post">
  <a href="reportesiniestro.php" class="w3-button w3-indigo">Ver Reporte</a>
  </form>
</div>

</div>

<br></br>


<form class="w3-container w3-card-4 w3-middle"   method="post">
<br></br>
  <header class="w3-container w3-teal ">
    <h1>LISTA DE DATOS DE AERONAVE </h1>
  </header>
    <?php include ('inc/tablasoloaeronaves.php') ?>
</form>





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

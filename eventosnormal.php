  <?php
session_start();
echo 'Usuario, ';
if (isset($_SESSION['k_username'])) {
 echo '<b>'.$_SESSION['k_username'].'</b>.';
}else{
  header("Location:index.php");}


?>
<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
<link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
<link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/estilos.css">
<script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="calendario_dw/calendario_dw.js"></script>

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
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
      <title>MANEJO DE PÓLIZAS</title>
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
                    <h1>AEROTÉCNICO</h1>
                </header>
  <form class="w3-container w3-card-4 w3-middle"   method="post">
<h2>Administrar</h2>
  <a href="ingresarempleadonormal.php" class="w3-button w3-indigo">Ingresar Empleado</a>
  </form>
</div>










    <div class="w3-container  w3-margin-top">
  <header class="w3-container w3-teal ">
    <h1>ESTADO AERONAVE</h1>
  </header>
<form class="w3-container w3-card-4 w3-middle"    method="post">
   <br/>
<a href="cambioestado.php" class="w3-button w3-indigo">Cambiar Estado</a>
</form>
</div>
</div>



<div class="w3-container  w3-half">
<header class="w3-container w3-green ">
          <h1>INGRESAR SINIESTRO</h1>
        </header>
<form class="w3-container w3-card-4  w3-border-blue " action="db_insertarsiniestro.php"  method="post">
  <p>
  <input class="w3-input" type="text" style="width:90%" name="aeronave"required>
  <label>Id de la Aeronave</label></p>
<p>
<input class="campofecha w3-input" type="text" name="fecha1"style="width:60%"  required>
<label>Elija la fecha del siniestro</label></p>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="descripcion" type="text" placeholder="Descripcion del siniestro">
    </div>
</div>
<button type="submit" class="w3-button w3-indigo">Ingresar Siniestro</button>
</form>
</div>




<form class="w3-container w3-card-4 w3-middle"   method="post">
  <header class="w3-container w3-teal ">
    <h1>EVENTOS</h1>
  </header>
    <?php include ('inc/tablapolizaaeronave.php') ?>
</form>

</div>
</body>
<?php include('inc/footer.php') ?>
<script src="js/base.js"></script>
</html>

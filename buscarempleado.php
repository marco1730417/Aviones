<?php
session_start();
echo 'Usuario, ';

?>
<?php require_once('conexion1.php');
$conexion=conectarDB(); ?>

<!DOCTYPE html>
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0 ,maximum-scale=1.0, minimum-scale=0">

</head>
<body>

  <?php include('inc/header.php') ?>
  <?php include('inc/menu.php') ?>


<div class="w3-container  w3-half">




  <div class="w3-container  w3-half">
      <div class="w3-container  w3-margin-top">
    <header class="w3-container w3-teal ">
      <h1>BUSCAR PERSONAL ASEGURADO</h1>
    </header>
<form class="w3-container w3-card-4 w3-middle" action="verempleado.php"   method="post">
  <input class="w3-input" type="text" style="width:90%" id="empleado"  name="empleado" placeholder="Ingrese nombres completos"required>
        <label>Nombre del Empleado</label></p> <p>
<button type="submit" class="w3-button w3-indigo ">Buscar </button>
</form>
</div>
</div>



</div>
<form class="w3-container w3-card-4 w3-middle"   method="post">
  <header class="w3-container w3-teal ">
    <h1>LISTA DE EMPLEADOS </h1>
  </header>
    <?php include ('inc/tablaempleado.php') ?>
</form>
</div>
</body>
<?php include('inc/footer.php') ?>
<script src="js/base.js"></script>
</html>

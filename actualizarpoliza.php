<?php
session_start();
echo 'Usuario, ';
if (isset($_SESSION['k_usernames'])) {
 echo '<b>'.$_SESSION['k_usernames'].'</b>.';
}else{
header("Location:index.php");
exit();}
?>

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
  <header class="w3-container w3-green ">
                <h1>MODIFICAR PÓLIZA</h1>
              </header>
  <form class="w3-container w3-card-4  w3-border-blue " action="db_actpoliza.php"  method="post">

    <p>

  <input class="w3-input" type="number" style="width:60%" name="codigo1" required>
  <label>ID Póliza a modificar</label></p>

      <p>

    <input class="w3-input" type="text" style="width:60%" name="codigo" required>
    <label>Nuevo Código Póliza</label></p>
    <p>

    <input class="w3-input" type="text" style="width:60%" name="nombre" required>
    <label>Nuevo Nombre Póliza</label></p>

      <p>

    <input class="campofecha w3-input" type="text" name="fecha1"style="width:60%"  required>
    <label>Elija la fecha inicial</label></p>

    <p>
    <input class="campofecha w3-input" type="text" name="fecha2"style="width:60%"  required>
    <label>Elija la fecha final</label></p>
    <p>
    <input class="w3-input" type="number" style="width:90%" name="valor"required>
    <label>Nuevo Valor Póliza</label></p>
    <p>
    <input class="w3-input" type="number" style="width:90%" name="usuario"required>
    <label>Nuevo Id Usuario</label></p>
    <p>
    <input class="w3-input" type="number" style="width:90%" name="aseguradora"required>
    <label>Nuevo Id Aseguradora</label></p>
     <button type="submit" class="w3-button w3-blue">Actualizar Póliza</button>
    </form>
  </div>

  <div class="w3-container  w3-half">
    <div class="w3-container  w3-margin-top">
      <header class="w3-container w3-green ">
                    <h1>ELIMINAR PÓLIZA</h1>
                  </header>
    <form class="w3-container w3-card-4 w3-middle" action="db_eliminarpoliza.php"   method="post">
      <input class="w3-input" type="text" style="width:90%" id="usuario"  name="usuario" required>
            <label>ID de la Póliza</label></p> <p>
    <button type="submit" class="w3-button w3-indigo ">Eliminar</button>
    </form>
  </div>
</div>

<div class="w3-container  w3-row-padding ">
    <div class="w3-container  w3-margin-top">
    <form class="w3-container  w3-middle" >
      <header class="w3-container w3-green ">
        <h1>TABLA DE USUARIOS Y ASEGURADORAS</h1>
      </header>
        <?php include ('inc/tablapoliza.php') ?>
    </form> </div></div>



<div class=" w3-container w3-row-padding ">
<form class="w3-container w3-card-4 w3-middle"  >
  <header class="w3-container w3-teal ">
    <h1>PÓLIZAS VIGENTES</h1>
  </header>
    <?php include ('inc/tablapolizacompleta.php') ?>
</form>
</div>

<div class=" w3-container w3-row ">
  <?php include('inc/footer.php') ?>
  <script src="js/base.js"></script>
</div>





</body>

</html>

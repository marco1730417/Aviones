<?php
session_start();
echo 'Usuario, ';
if (isset($_SESSION['k_username'])) {
 echo '<b>'.$_SESSION['k_username'].'</b>.';
}else{
  header("Location:index.php");}
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
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0 ,maximum-scale=1.0, minimum-scale=0">
  </head>


  <body>
<?php include('inc/header.php') ?>
<?php include('inc/menunormal.php') ?>


  <div class="contenedor" >



  <div class="fila">
  <div class="columna columna-m-12 columna-g-12" >
  <?php include('inc/slider.php') ?>
  </div>
  </div>
  </div>


<?php include('inc/footer.php') ?>
<script src="js/base.js"></script>
</body>
</html>

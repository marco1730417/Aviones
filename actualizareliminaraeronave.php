<?php
session_start();
echo 'Usuario, ';
if (isset($_SESSION['k_usernames'])) {
 echo '<b>'.$_SESSION['k_usernames'].'</b>.';
}else{
header("Location:index.php");
exit();}
?>

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
  <div class="w3-container  w3-margin-top">
    <header class="w3-container w3-teal ">
      <h1>INGRESAR NUEVA AERONAVE</h1>
    </header>
  <form class="w3-container w3-card-4  w3-border-blue " action="db_insertaraeronave.php"  method="post">

      <p>

        <p>
            <input class="w3-input" type="text" style="width:60%" id="matricula"  name="matricula" required>
            <label>Matrícula </label></p>
            <p>

              <p>
                  <label>Tipo de Aeronave </label></p>
                <input class="w3-check" type="checkbox" name="tipo" value="Helicoptero"checked="checked">
                <label>Helicoptero</label>

                <input class="w3-check" type="checkbox"name="tipo" value="Avion">
                <label>Avion</label>


  <p>



      <input class="w3-input" type="text" style="width:60%" name="marca" required>
          <label>Marca</label></p>
    <p>
    <input class="w3-input" type="text" style="width:60%" name="modelo" required>
  <label>Modelo</label></p>

  <p>
      <label>GRUPOS</label></p>
                <input class="w3-radio" type="radio" name="grupo" value="1" checked>
                <label>GAE 43</label>

                <input class="w3-radio" type="radio" name="grupo" value="2">
                <label>GAE 44</label></p>
                <input class="w3-radio" type="radio" name="grupo" value="3" checked>
                <label>GAE 45</label>

                <input class="w3-radio" type="radio" name="grupo" value="4">
                <label>ESAE</label></p>


<p>
<input class="w3-input" type="number" style="width:60%" name="poliza" required>
<label>Id Póliza</label></p>

<p>
<input class="w3-input" type="number" style="width:60%" name="valor" required>
<label>Valor </label></p>

<p>



  <button type="submit" class="w3-button w3-blue">Ingresar Aeronave</button>

</form>
</div>
</div>


<div class="w3-container  w3-half">
  <div class="w3-container  w3-margin-top">
    <header class="w3-container w3-teal ">
      <h1>MODIFICAR AERONAVE</h1>
    </header>


    <form class="w3-container w3-card-4  w3-border-blue " action="db_actaeronave.php"  method="post">

        <p>

          <p>
              <input class="w3-input" type="number" style="width:60%" id="apodo"  name="matricula1" required>
              <label>Ingrese el ID de la aeronave que desea modificar</label></p>


          <p>
              <input class="w3-input" type="text" style="width:60%" id="apodo"  name="matricula" required>
              <label>Nueva Matrícula </label></p>


              <p>


                      <p>
                          <label>Tipo de Aeronave </label></p>
                        <input class="w3-check" type="checkbox" name="tipo" value="Helicoptero"checked="checked">
                        <label>Helicoptero</label>

                        <input class="w3-check" type="checkbox"name="tipo" value="Avion">
                        <label>Avion</label>


    <p>
        <input class="w3-input" type="text" style="width:60%" name="marca" required>
            <label>Nueva Marca</label></p>
      <p>
      <input class="w3-input" type="text" style="width:60%" name="modelo" required>
    <label>Nuevo Modelo</label></p>


  <p>
  <input class="w3-input" type="number" style="width:60%" name="poliza" required>
  <label>Nueva Id Póliza</label></p>

  <p>
      <label>GRUPOS</label></p>
                <input class="w3-radio" type="radio" name="grupo" value="1" checked>
                <label>GAE 43</label>

                <input class="w3-radio" type="radio" name="grupo" value="2">
                <label>GAE 44</label></p>
                <input class="w3-radio" type="radio" name="grupo" value="3" checked>
                <label>GAE 45</label>

                <input class="w3-radio" type="radio" name="grupo" value="4">
                <label>ESAE</label></p>
                    <p>
                  <input class="w3-input" type="number" style="width:60%" name="valor" required>
                  <label>Nueva Valor</label></p>


    <button type="submit" class="w3-button w3-blue">Modificar Aeronave</button>

  </form>




</div>



<div class="w3-container  w3-margin-top">
<header class="w3-container w3-teal ">
                    <h1>MÁS OPCIONES AERONAVE</h1>
                </header>
  <form class="w3-container w3-card-4 w3-middle"  action="db_eliminaraeronave.php" method="post">

<p>
      <input class="w3-input" type="text" style="width:60%" id="aeronave"  name="aeronave" required>
      <label>Id Aeronave</label></p>
  <button type="submit" class="w3-button w3-blue">Eliminar </button>


  </form>
</div>

<div class="w3-container  w3-margin-top">
<header class="w3-container w3-teal ">
                    <h1>ESTADO AERONAVE</h1>
                </header>
  <form class="w3-container w3-card-4 w3-middle"  action="asignarestado.php" method="post">
<br></br>
<button type="submit" class="w3-button w3-blue">Asignar Estado</button>

  </form>
</div>




</div>
<form class="w3-container w3-card-4 w3-middle"   method="post">
  <header class="w3-container w3-teal ">
    <h1>LISTA DE DATOS DE AERONAVE </h1>
  </header>
    <?php include ('inc/tablapolizaaeronave.php') ?>
</form>
<form class="w3-container w3-card-4 w3-middle"   method="post">
  <header class="w3-container w3-teal ">
    <h1>PÓLIZAS SIN AERONAVES ASIGNADAS </h1>
  </header>
    <?php include ('inc/tablapolizassinaeronaves.php') ?>
</form>
</div>
</body>
<?php include('inc/footer.php') ?>
<script src="js/base.js"></script>
</html>

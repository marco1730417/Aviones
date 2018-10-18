
<?php
session_start();
require_once('conexion1.php');
$conexion=conectarDB();
?>
<html>
<title>SEGUROS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container">
  <h5></h5>
<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue w3-large">Bienvenidos</button>
<img src="img/cielo1.jpg" alt="Car" style="width:100%">
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="img/im1.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="validar_usuario.php "method="POST">
        <div class="w3-section">
          <label><b>Usuario</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese Usuario" name="usuario" required>
          <label><b>Contraseña</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Ingrese Contraseña" name="password" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding"  type="submit">Ingresar</button>

        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancelar
        </button>

      </div>
    </div>
  </div>
</div>
</body>
</html>

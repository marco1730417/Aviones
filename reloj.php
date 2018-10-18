

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd"
>
<html lang="es">
<head>
<title>Probando el plugin jQuery de calendario_dw</title>
   <link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/estilos.css">
   <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0 ,maximum-scale=1.0, minimum-scale=0">

   <style type="text/css">
   body{
      font-family: tahoma, verdana, sans-serif;
   }
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


<h1>Plugin calendario</h1>

   <form>
      Fecha: <input type="text" name="fecha" class="campofecha" size="12">
   </form>
</body>
</html>

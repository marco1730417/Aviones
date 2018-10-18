<?php

$conex = "host=localhost port=5432 dbname=datos user=postgres password=1234";
$cnx = pg_connect($conex) or die ("<h1>Error de conexion.</h1> ". pg_last_error());
session_start();

function quitar($mensaje)
{
 $nopermitidos = array("'",'\\','<','>',"\"");
 $mensaje = str_replace($nopermitidos, "", $mensaje);
 return $mensaje;
}
if(trim($_POST["usuario"]) != "" && trim($_POST["password"]) != "")
{
 $usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
 $password = $_POST["password"];
 $result = pg_query('SELECT password, username FROM usuarios WHERE username=\''.$usuario.'\'');

 if($row = pg_fetch_array($result)){
  if($row["password"] == $password){
    if($row["password"] == 'admin'&&$row["username"] == 'admin'){
     $_SESSION["k_usernames"] = $row['username'];
     header("Location:menuadm.php");
   }else{

   $_SESSION["k_username"] = $row['username'];
   header("Location:menunormal.php");}
  }

  else{
   echo 'Contraseña incorrecta';
  }
 }else{
  echo 'Usuario no existente en la base de datos';
 }

 pg_free_result($result);
}else{
 echo 'Debe especificar un usuario y password';
}
pg_close();
?>

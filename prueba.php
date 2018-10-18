<?php
session_start();
echo 'Usuario, ';
if (isset($_SESSION['k_username'])) {
 echo '<b>'.$_SESSION['k_username'].'</b>.';
}else{
  header("Location:index.php");}
?>
<<?php require_once ('conexion1.php');
$conexion=conectarDB();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>hola mundo</title>
  </head>
  <body>
    <?php $query="select *from usuarios"
$resultado=pg_query($conexion,$query)or die ("error");

$nr=pg_num_rows($resultado);
if($nr>0){

  echo "<table border=1 background-color=skyblue>
<tr><td></td>  ";

while ($filas=pg_fetch_array($resultado))

echo "<tr><td>".filas["usuario"]."</td>";

}else {

  echo "no hay datos";
}
    ?>

  </body>
</html>

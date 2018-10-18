<?php
session_start();
require_once('conexion1.php');
$conexion=conectarDB();
$poliza1=$_SESSION['poliza'];

$ok= listarAeronavespoliza( $conexion, $aeronave );

?>

<?php 
include("conexion-datos.php");
//Conexion con el Servidor
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conexion = new mysqli($servidorConexion, $usuarioConexion, $claveConexion, $baseDatosServicios);
//echo $conexion->host_info . "\n";

$query = "SELECT * FROM datos_contacto WHERE dtc_id=1";
$result = $conexion->query($query);
$row = $result->fetch_array(MYSQLI_BOTH);
?>
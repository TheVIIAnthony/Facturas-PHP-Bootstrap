<?php
include 'conexion.php';
$monto = '';
$tipo = '';
$fecha = '';
$nombre = '';
if (isset($_POST['monto']) && isset($_POST['tipo']) && isset($_POST['fecha']) && isset($_POST['nombre'])) {
	$monto = $_POST["monto"];
	$tipo = $_POST["tipo"];
	$fecha = $_POST["fecha"];
	$nombre = $_POST['nombre'];
	$insertar = "insert into facturas(id, nombre, monto, tipo, fecha) values(null,'$nombre','$monto','$tipo', '$fecha')";
	$resultado = mysqli_query($con, $insertar);
	mysqli_close($con);
	
}
header('Location: http://localhost/Facturas-PHP-Bootstrap//index.php');
?>
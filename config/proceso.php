<?php
include 'conexion.php';
$monto = '';
$tipo = '';
$fecha = '';
if (isset($_POST['monto']) && isset($_POST['tipo']) && isset($_POST['fecha'])) {
	$monto = $_POST["monto"];
	$tipo = $_POST["tipo"];
	$fecha = $_POST["fecha"];
	$insertar = "insert into facturas(idM, monto, tipo, fecha) values(null,'$monto','$tipo','$fecha')";
	$resultado = mysqli_query($con, $insertar);
	mysqli_close($con);	
}

?>
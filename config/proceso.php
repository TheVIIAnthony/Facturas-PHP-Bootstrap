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

	$sqlnombre = "select nombre from facturas where nombre = '$nombre' ";
	$QueryNombre=mysqli_query($con, $sqlnombre);
	$ValidarNombre=mysqli_fetch_assoc($QueryNombre);
	$resultadoNombre=$ValidarNombre["nombre"];
	if ($resultadoNombre == $nombre) {
		$sqlmonto = "select monto from facturas where nombre = '$nombre'";
		$QueryMonto=mysqli_query($con, $sqlmonto);
		$ValidarMonto=mysqli_fetch_assoc($QueryMonto);
		$resultadoMonto=$ValidarMonto["monto"];
		$total = $resultadoMonto + $monto;
		$ConsultaAlterar = "update facturas set monto = '$total' where nombre = '$nombre'";
		$resultadoAlterar = mysqli_query($con, $ConsultaAlterar);
		mysqli_close($con);	
	}else{
		$insertar = "insert into facturas(idM, nombre, monto, tipo, fecha) values(null,'$nombre','$monto','$tipo', '$fecha')";
		$resultado = mysqli_query($con, $insertar);
		mysqli_close($con);	
	}
	
}
header('Location: http://localhost/Facturas-PHP-Bootstrap//index.php');
?>
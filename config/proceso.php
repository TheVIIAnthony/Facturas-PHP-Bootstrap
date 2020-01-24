<?php
include 'conexion.php';
$monto = $_GET["monto"];
$tipo = $_POST["tipo"];
$fecha = $_POST["fecha"];
$insertar = "insert into facturas(monto, tipo, fecha) values('$monto','$tipo','$fecha')";
$resultado = mysqli_query($con, $insertar);
mysqli_close($con);
?>
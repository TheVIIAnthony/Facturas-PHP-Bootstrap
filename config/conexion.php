<?php 
$host ='localhost';
$usuario='root';
$clave='';
$bd='';
try {
	$con = mysqli_connect($host,$usuario,$clave,$bd);	
} catch (Exception $e) {
	echo "error de conexion a mysql";
}
?>
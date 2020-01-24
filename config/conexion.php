<?php 
$host ='localhost';
$usuario='root';
$clave='';
$bd='taxis';
try {
	$con = new mysqli($host,$usuario,$clave,$bd);	
} catch (Exception $e) {
	echo "error de conexion a mysql";
}
?>
<?php
require ('fpdf.php');
require ('index.php');

class pdf extends fpdf{
	function header(){
		$this -> SetFont('Arial', 'B', 18);
		$this -> Cell(60);
		$this -> Cell(70, 10, 'Registros del taxista');
		$this ->Ln(20);
	}
	function Footer(){
		$this -> SetY(-15);
		$this -> SetFont('Arial', 'I', 8);
		$this -> Cell(0, 10, utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
	}
}
$pdf = new pdf();
$pdf -> AddPage();
$pdf -> SetFont('Arial', 'B', 16);
require('config/conexion.php');
$nombre = '';
if (isset($_POST['celdaNombre'])) {
	$nombre = $_POST['celdaNombre'];
	$sql = "select nombre, monto, tipo, fecha from facturas where nombre = '$nombre'";
	$resultado = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($resultado)) {
		$pdf->Cell(47, 10, $row['nombre'], 1, 0, 'C', 0);
		$pdf->Cell(47, 10, $row['monto'], 1, 0, 'C', 0);
		$pdf->Cell(47, 10, $row['tipo'], 1, 0, 'C', 0);
		$pdf->Cell(47, 10, $row['fecha'], 1, 1, 'C', 0);
	}
	$pdf -> Output();
}




?>
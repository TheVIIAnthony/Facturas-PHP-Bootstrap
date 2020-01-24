<?php 
require_once ("config/conexion.php");
?>
<html>
<head>
	<title>
		Sistema de factuaras
	</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Navegacíon</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Desplegable
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Acción</a>
						<a class="dropdown-item" href="#">Otra accíon</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">algo más</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Deshabilitado</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
			</form>
		</div>
	</nav>
	<br>
	<div class="container">
		<form action="config/proceso.php" method="POST">
			<div class="row">
				<div class="col">
					<label>ID</label>
					<input class="form-control" placeholder="entrada" id="">
				</div>
				<div class="col">
					<label>Monto</label>
					<input class="form-control" name="monto" placeholder="entrada" id="monto" required="">
				</div>
				<div class="col">
					<label>Tipo</label>
					<input class="form-control" name="tipo" placeholder="entrada" id="tipo" required="">
				</div>
				<div class="col">
					<label>Fecha</label>
					<input class="form-control" name="fecha" placeholder="entrada" id="fecha" required="">
				</div>
			</div>
			<br>
			<div class="row justify-content-end">
				<input class="btn btn-primary" type="submit" name="guardar" value="Submit">
			</div>
		</form>
	</div>
	<br>
	<div class="container">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">nombre</th>
					<th scope="col">dato 1</th>
					<th scope="col">dato 2</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>reg1</td>
					<td>reg2</td>
					<td>reg3</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>reg4</td>
					<td>reg5</td>
					<td>reg6</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>reg7</td>
					<td>reg8</td>
					<td>reg9</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>
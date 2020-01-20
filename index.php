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
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<br>
	<div class="container">
		<form action="proceso.php" method="">
			<div class="row">
				<div class="col">
					<label>Movil</label>
					<input type="text" class="form-control" placeholder="First name">
				</div>
				<div class="col">
					<label>Monto</label>
					<input type="text" class="form-control" placeholder="Last name">
				</div>
				<div class="col">
					<label>Tipo</label>
					<input type="text" class="form-control" placeholder="text">
				</div>
				<div class="col">
					<label>Fecha</label>
					<input type="text" class="form-control" placeholder="text">
				</div>
			</div>
			<br>
			<div class="row justify-content-end">
				<input class="btn btn-primary" type="submit" value="Submit">
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
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>
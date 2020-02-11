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
					<label>Nombre</label>
					<input class="form-control" name="nombre" placeholder="entrada" id="nombre" required>
				</div>
				<div class="col">
					<label>Monto</label>
					<input class="form-control" name="monto" placeholder="entrada" id="monto" required>
				</div>
				<div class="col">
                            <label class="bmd-label-floating">Tipo</label>
                            <select name="tipo" class="form-control">
                              <option value="Notas">Notas</option>
                              <option value="Efectivo">Efectivo</option>
                              <option value="Ambos">Ambos</option>
                            </select>
                          </div>
				<div class="col">
					<label class="bmd-label-floating">Fecha</label>
					<input type="date" name="fecha" class="form-control" required>
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
		<table class="table table-hover table-bordered" id="tabla">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Monto</th>
					<th scope="col">Revisar</th>
					<th>PDF</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "select distinct sum(monto), nombre from facturas GROUP BY nombre";
				$query = mysqli_query($con, $sql);
				// $QueryMonto=mysqli_query($con, $sqlmonto);
				// $ValidarMonto=mysqli_fetch_assoc($QueryMonto);
				// $total=$ValidarMonto["monto"];
				while ($mostrar = mysqli_fetch_array($query)) {
					?>	
					<tr>
						<th scope="row">Reg</th>
						<td><?php echo $mostrar['nombre'] ?></td>
						<td><?php echo $mostrar['sum(monto)'] ?></td>
						<td>
							<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Registros</button>
						</td>
						<td>
							<button type="button" class="btn btn-info btn-sm"><a href=""></a> Generar PDF</button>
						</td>
					</tr>
					<?php 
				}				?>
			</tbody>
		</table>
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Modal Header</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<table class="table table-hover table-bordered" id="tabla">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nombre</th>
									<th scope="col">Monto</th>
									<th scope="col">tipo</th>
									<th scope="col">fecha</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "select nombre, monto, tipo, fecha from facturas ";
								$query = mysqli_query($con, $sql);
								while ($mostrar = mysqli_fetch_array($query)) {
									?>	
									<tr>
										<th scope="row">Reg</th>
										<td><?php echo $mostrar['nombre'] ?></td>
										<td><?php echo $mostrar['monto'] ?></td>
										<td><?php echo $mostrar['tipo'] ?></td>
										<td><?php echo $mostrar['fecha'] ?></td>
									</tr>
									<?php 
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pdf</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-bordered table-sm">
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Correo</th>
						<th>Teléfono</th>
						<th>Nivel Académico</th>
						<th>Procedencia</th>
					</tr>
					<?php foreach ($usuarios as $usuario): ?>
						<tr>
							<td><small><?php echo $usuario['id'] ?></small></td>
							<td><small><?php echo $usuario['nombre'] ?></small></td>
							<td><small><?php echo $usuario['apellido'] ?></small></td>
							<td><small><?php echo $usuario['correo'] ?></small></td>
							<td><small><?php echo $usuario['phone'] ?></small></td>
							<td><small><?php echo $usuario['nivel'] ?></small></td>
							<td><small><?php echo $usuario['state'] ?></small></td>
						</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<a href="pdf">Generar pdf</a>
			</div>
		</div>
	</div>
</body>
</html>
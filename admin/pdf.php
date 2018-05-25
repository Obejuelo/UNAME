<?php 
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$header = '<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>pdf</title>
				<style>
					.table{
						margin:20px 0px;
					}
					.table table {
						width:100%;
						border-left:solid 1px gray;
						margin-right: auto;
						margin-left: auto;
					}
					table td {
						border-bottom:1px solid gray;
						border-right:solid 1px gray;
					}
					.cabecera td{
						background: black;
						color:white;
						font-size: 12px;
					}
					.usuarios td{
						font-size: 12px;
						font-style: italic;
						color: grey;
					}
					h1{
						text-align:center;
						color: gray;
					}
				</style>
			</head>
			<body>';

$tablas = '';
foreach ($usuarios as $usuario) {
	$tablas .= '<tr class="usuarios">
					<td>'.$usuario['id'].'</td>
					<td>'.$usuario['nombre'].'</td>
					<td>'.$usuario['apellido'].'</td>
					<td>'.$usuario['correo'].'</td>
					<td>'.$usuario['phone'].'</td>
					<td>'.$usuario['nivel'].'</td>
					<td>'.$usuario['state'].'</td>
				</tr>';
}

	$html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8');
		$html2pdf->writeHTML($header.'
			<h1>'.$titulo_completo.'</h1>
		<div class="table">
			<table>
				<tr class="cabecera">
					<td>Núm</td>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Correo</td>
					<td>Teléfono</td>
					<td>Nivel académico</td>
					<td>Procedencia</td>
				</tr>
				'.$tablas.'
			</table>
		</div>
		</body>'
		);
	$html2pdf->output('pdf_generated.pdf');
?>
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
$id_user = 2;
foreach ($usuarios as $usuario) {
	$id_user++;
	$tablas .= '<tr class="usuarios">
					<td>'.$id_user.'</td>
					<td>'.$usuario['nombre'].'</td>
					<td>'.$usuario['apellido'].'</td>
					<td>'.$usuario['correo'].'</td>
					<td>'.$usuario['phone'].'</td>
					<td>'.$usuario['nivel'].'</td>
					<td>'.$usuario['state'].'</td>
				</tr>';
}

//Funcion para obtener la fecha y hora actual
function obtener_fecha(){
	$time = getdate(time());

	//Formateamos la fecha
	$dia = $time['mday'];
	$mes = $time['mon'];
	$year = $time['year'];

	if ($mes < 10) {
		$mes = '0' . $mes;
	}
	if ($dia < 10) {
		$dia = '0' . $dia;
	}
	$year = substr($year, -2);

	//Formateamos la hora
	$hour = $time['hours'];
	$minutes = $time['minutes'];
	$seconds = $time['seconds'];

	$hour = $hour - 7;
	if ($hour < 10) {
		$hour = '0' . $hour;
	}
	if ($minutes < 10) {
		$minutes = '0' . $minutes;
	}
	if ($seconds < 10) {
		$seconds = '0' . $seconds;
	}

	$fecha = 'Rep-'. $dia . $mes . $year . '-' .$hour. $minutes . '.pdf' ;
	return $fecha;
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
	$html2pdf->output(obtener_fecha());
?>
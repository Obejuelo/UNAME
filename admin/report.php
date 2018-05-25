<?php
require 'config.php';
require '../functions.php';
$conexion = conexion($bd_eventos);
$notas = obtener_eventos($conexion);

require 'dashboard/report.view.php';
?>
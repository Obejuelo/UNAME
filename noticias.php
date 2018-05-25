<?php
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion) {
	header("Locaton: error.php");
} 

//$notas = obtener_nota($noticias_config['notas_por_pagina'], $conexion);
$notas = obtener_noticias($conexion);

rsort($notas);

if (!$notas) {
	header('Location: error.php');
} 
require 'php/noticias.view.php';

?>
<?php
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion) {
	header("Locaton: error.php");
} 

$imagenes = obtener_imagen($conexion);
rsort($imagenes);
if (!$imagenes) {
	header('Location: error.php');
} 
require 'php/galeria.view.php';
?>
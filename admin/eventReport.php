<?php 
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_eventos);

if (!$conexion) {
	header('Location: error.php');
}

if (!empty($id_articulo)) {
	header('Location: error.php');
}

//OBTENEMOS LAS VARIABLES POR GET
$id_articulo = id_articulo($_GET['id']);
$titulo = utf8_decode($_GET['titulo']);
$titulo_completo = $titulo;

$titulo = limpia_espacios($titulo);
$titulo = eliminar_tildes($titulo);
$titulo = strtolower($titulo);

$usuarios = obtener_usuarios($conexion, $titulo);

require 'pdf.php';

//header('Location: pdf');
?>
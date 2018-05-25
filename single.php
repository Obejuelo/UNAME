<?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);

if (!$conexion) {
	header('Location: error.php');
}
if (empty($id_articulo)) {
	//header('Location: noticias.php');
}

$nota = obtener_post_por_id($conexion, $id_articulo);

if (!$nota) {
	header('Location: index.php');
}
$nota = $nota[0];

require 'php/single.view.php';

?>
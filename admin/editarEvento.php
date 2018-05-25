<?php
require 'config.php';
require '../functions.php';
$conexion = conexion($bd_eventos);

if (!$conexion) {
    //header("Location: error");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$titulo = limpiarDatos($_POST['titulo']);
	$texto = $_POST['texto'];
	$id = limpiarDatos($_POST['id']);
	$imagen_guardada = $_POST['imagen-guardada'];
	$imagen = $_FILES['imagen'];

	if (empty($imagen['name'])) {
		$imagen = $imagen_guardada;
	} else {
		$archivo_subido = '../' . $noticias_config['carpeta_eventos'] . $_FILES['imagen']['name'];
		move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo_subido);
		$imagen = $_FILES['imagen']['name'];
	}

	$statement = $conexion->prepare(
		'UPDATE eventos SET titulo = :titulo, texto = :texto, 
		img = :imagen WHERE id = :id'
	);

	$statement->execute(array(
		':titulo' => $titulo,
		':texto' => $texto,
		':imagen' => $imagen,
		':id' => $id
	));

	header('Location: ' . RUTA . 'admin/agenda.php');
} else {
	$id_articulo = id_articulo($_GET['id']);

	if (empty($id_articulo)) {
		header('Location: ' . RUTA . 'admin');
	}

	$nota = obtener_post_agenda($conexion, $id_articulo);

	if (!$nota) {
		header('Location: ' . RUTA . 'admin');
	}

	$nota = $nota[0];
}

$notas = obtener_eventos($conexion);

require 'dashboard/editarAgenda.php';
?>
<?php 
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_eventos);

if (!$conexion) {
	header('Location: error.php');
}

if (!empty($id_articulo)) {
	header('Location: error.php');
}

//OBTENEMOS LAS VARIABLES POR GET PARA CREAR LA TABLA 
$id_articulo = id_articulo($_GET['id']);
$titulo = utf8_decode($_GET['titulo']);

$titulo = limpia_espacios($titulo);
$titulo = eliminar_tildes($titulo);
$titulo = strtolower($titulo);

if ($conexion) {
	$stmt = $conexion->prepare(
		'CREATE TABLE IF NOT EXISTS '.$titulo.' (
		  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
		  `apellido` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
		  `correo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
		  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
		  `nivel` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
		  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL
		) '
	);
	$stmt->execute();
}

//OBTENEMOS LAS VARIABLES DE REGISTRO POR POST E INSERTAMOS EN LA DB
$enviado = '';
$errores = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$nombre 	= capitalize($_POST['nombre']);
	$apellido 	= capitalize($_POST['apellido']);
	$correo 	= $_POST['email'];
	$phone 		= $_POST['phone'];
	$nivel 		= capitalize($_POST['nivel']);
	$state 		= capitalize($_POST['state']);

	//VALIDAMOS SI EL CORREO EXISTE
	$stmt = $conexion->prepare('
		SELECT * FROM ' .$titulo. ' WHERE correo = :correo'
	);
	$stmt->execute(array(
		':correo' => $correo
	));

	$resultado = $stmt->fetchAll();

	if ($resultado != false) {
		$errores .= 'El correo electrónico que usaste ya se encuentra registrado!!';
	} else {
		$statement = $conexion->prepare(
		    'INSERT INTO ' .$titulo.'(id, nombre, apellido, correo, phone, nivel, state)
		    VALUES (null, :nombre, :apellido, :correo, :phone, :nivel, :state)'
		    );

		$statement->execute(array(
		    ':nombre' 	=> $nombre,
		    ':apellido' => $apellido,
		    ':correo' 	=> $correo,
		    ':phone' 	=> $phone,
		    ':nivel' 	=> $nivel,
			':state' 	=> $state
		));

		$enviado = 'Gracias, posteriormente se te enviará un email para culminar tu registro';
	}
	
} 

$nota = obtener_post_agenda($conexion, $id_articulo);
$nota = $nota[0];

$notas = obtener_eventos_id($conexion, $id_articulo);
rsort($notas);

$correo = 'correo@correo.com';

require 'php/agenda.view.php';
?>
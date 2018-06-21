<?php session_start();
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
$usuarios = getUsers($conexion);

$user = $usuarios[0];
 
$user_name = $user[1];
$user_pass = $user[3];

$error = '';

if (isset($_SESSION[$user_name])) {
	header('Location: ' . RUTA .'admin/');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = limpiarDatos($_POST['usuario']);
	$password = $_POST['pass'];
	$password =  hash('sha512', $password);

	if ($usuario == $user_name && $password == $user_pass) {
		$_SESSION['unm'] = $user_name;
		header('Location:' . RUTA . 'admin/index');
	} else {
		$error .= '<p class="text-danger">verifica tus datos</p>';
		// header('Location:' . RUTA . 'admin/sesion');
	}
}

// if (isset($_SESSION[$usuario_admin['usuario']])) {
// 	header('Location: ' . RUTA .'admin/');
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 	$usuario = limpiarDatos($_POST['usuario']);
// 	$password = limpiarDatos($_POST['pass']);

// 	if ($usuario == $usuario_admin['usuario'] && $password == $usuario_admin['password']) {
// 		$_SESSION['admin'] = $usuario_admin['usuario'];
// 		header('Location:' . RUTA . 'admin/index');
// 	} else {
// 		header('Location:' . RUTA . 'admin/sesion');
// 	}
// }

require '../php/sesion.view.php';

?>
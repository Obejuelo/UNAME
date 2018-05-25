<?php session_start();
require 'config.php';
require '../functions.php';

if (isset($_SESSION[$usuario_admin['usuario']])) {
	header('Location: ' . RUTA .'admin/');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = limpiarDatos($_POST['usuario']);
	$password = limpiarDatos($_POST['pass']);

	if ($usuario == $usuario_admin['usuario'] && $password == $usuario_admin['password']) {
		$_SESSION['admin'] = $usuario_admin['usuario'];
		header('Location:' . RUTA . 'admin/index');
	} else {
		header('Location:' . RUTA . 'admin/sesion');
	}
}

require '../php/sesion.view.php';

?>
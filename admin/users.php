<?php
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
$usuarios = getUsers($conexion);
$usuario = $usuarios[0];
$password = $usuario[3];

$error = '';
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$pass = $_POST['pass'];
	$new_pass = $_POST['new_pass'];
	$confirm_pass = $_POST['confirm_pass'];

	$pass = hash('sha512', $pass);
	$new_pass_crypt = hash('sha512', $new_pass);
	$new_pass_crypt2 = hash('sha512', $confirm_pass);

	if ($password == $pass) {
		if ($new_pass == $confirm_pass) {
			$statement = $conexion->prepare('UPDATE usuarios SET password = :pass');
			$statement->execute(array(':pass' => $new_pass_crypt));

			$mensaje .= 'tu contraseña fue cambiada de forma exitosa.';
		} else {
			$error .= '<p>Las contraseñas no coinciden, por favor verifica.</p>';
		}
	} else {
		$error .= '<p>Por favor verifica tu contraseña actual.</p>';
	}
}

require 'dashboard/users.view.php';
?>

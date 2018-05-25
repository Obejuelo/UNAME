<?php session_start();
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_eventos);
if (!$conexion) {
	header('Location: ../error');
}

$id = limpiarDatos($_GET['id']);

if (!$id) {
	header('Location: ' . RUTA . '/admin');
}

$statement = $conexion->prepare('DELETE FROM eventos WHERE id = :id');
$statement->execute(array('id' => $id));

header('Location: ' . RUTA . 'admin/agenda');

?>

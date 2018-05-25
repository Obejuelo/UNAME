<?php
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$descripcion = limpiarDatos($_POST['descripcion']);
    $imagen = $_FILES['imagen']['tmp_name'];

    $archivo_subido = '../' . $noticias_config['carpeta_galeria'] . $_FILES['imagen']['name'];

    move_uploaded_file($imagen, $archivo_subido);

    $statement = $conexion->prepare(
    'INSERT INTO imagenes (id, imagen, descripcion)
    VALUES (null, :imagen, :descripcion)'
    );

    $statement->execute(array(
        ':imagen' => $_FILES['imagen']['name'],
        ':descripcion' => $descripcion,
    ));

    header('Location: '. RUTA . 'admin/galery');
}

if (!$conexion) {
	header("Locaton: error");
} 

$imagenes = obtener_imagen($conexion);
rsort($imagenes);

require 'dashboard/galeria.view.php';
?>
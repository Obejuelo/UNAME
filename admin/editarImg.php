<?php
require 'config.php';
require '../functions.php';
$conexion = conexion($bd_config);

if (!$conexion) {
    header("Locaton: error");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descripcion = $_POST['descripcion'];
    $id = limpiarDatos($_POST['id']);
    $imagen_guardada = $_POST['imagen-guardada'];
    $imagen = $_FILES['imagen'];

    if (empty($imagen['name'])) {
        $imagen = $imagen_guardada;
    } else {
        $archivo_subido = '../' . $noticias_config['carpeta_galeria'] . $_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo_subido);
        $imagen = $_FILES['imagen']['name'];
    }

    $statement = $conexion->prepare(
        'UPDATE imagenes SET imagen = :imagen, 
        descripcion = :descripcion WHERE id = :id'
    );

    $statement->execute(array(
        ':imagen' => $imagen,
        ':descripcion' => $descripcion,
        ':id' => $id
    ));

    header('Location: ' . RUTA . 'admin/galery');
} else {
    $id_articulo = id_articulo($_GET['id']);

    if (empty($id_articulo)) {
        header('Location: ' . RUTA . 'admin');
    }

    $img = obtener_img_por_id($conexion, $id_articulo);

    if (!$img) {
        header('Location: ' . RUTA . 'admin');
    }

    $img = $img[0];
}
$imagenes = obtener_imagen($conexion);
rsort($imagenes);

require 'dashboard/editarFoto.view.php';
?>
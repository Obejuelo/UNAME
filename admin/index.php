<?php 
require 'config.php';
require '../functions.php';
$conexion = conexion($bd_config);

if (!$conexion) {
	header("Locaton: error");
} 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $texto = $_POST['texto'];
    $imagen = $_FILES['imagen']['tmp_name'];

    $archivo_subido = '../' . $noticias_config['carpeta_imagenes'] . $_FILES['imagen']['name'];

    move_uploaded_file($imagen, $archivo_subido);

    $statement = $conexion->prepare(
    'INSERT INTO noticias (id, titulo, texto, imagen)
    VALUES (null, :titulo, :texto, :imagen)'
    );

    $statement->execute(array(
        ':titulo' => $titulo,
        ':texto' => $texto,
        ':imagen' => $_FILES['imagen']['name']
    ));

    header('Location: '. RUTA . '/admin/index');
}

$notas = obtener_noticias($conexion);
rsort($notas);

require 'dashboard/index.php';
?>
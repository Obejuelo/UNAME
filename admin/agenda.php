<?php 
require 'config.php';
require '../functions.php';
$conexion = conexion($bd_eventos);

if (!$conexion) {
    header("Locaton: error.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    //$extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $imagen = $_FILES['imagen']['tmp_name'];

    $archivo_subido = '../' . $noticias_config['carpeta_eventos'] . $_FILES['imagen']['name'];

    move_uploaded_file($imagen, $archivo_subido);

    $statement = $conexion->prepare(
    'INSERT INTO eventos (id, titulo, texto, img)
    VALUES (null, :titulo, :texto, :img)'
    );

    $statement->execute(array(
        ':titulo' => $titulo,
        ':texto' => $texto,
        ':img' => $_FILES['imagen']['name']
    ));

    header('Location: '. RUTA . '/admin/agenda');
}
$notas = obtener_eventos($conexion);

require 'dashboard/agenda.view.php';
?>
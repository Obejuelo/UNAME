<?php
function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}

function limpia_espacios($cadena){
	$cadena = str_replace(' ', '', $cadena);
	return $cadena;
}

function conexion($bd_config){
	try {
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}

function id_articulo($id){
	return (int)limpiarDatos($id);
}
function titulo($id){
	return limpiarDatos($id);
}

function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_nota($nota_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? pagina_actual() * $nota_por_pagina - $nota_por_pagina : 0;
	$sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM noticias LIMIT $inicio, $nota_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function obtener_noticias($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM noticias");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function obtener_usuarios($conexion, $tabla){
	$sentencia = $conexion->prepare("SELECT * FROM $tabla");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function obtener_eventos($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM eventos");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function obtener_imagen($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM imagenes");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function obtener_post_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM noticias WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function obtener_img_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM imagenes WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function obtener_post_agenda($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM eventos WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function numero_paginas($notas_por_pagina, $conexion){
	$total_notas = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_notas->execute();
	$total_notas = $total_notas->fetch()['total'];

	$numero_paginas = ceil($total_notas / $notas_por_pagina);
	return $numero_paginas;
}

function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	$dia = date('d', $timestamp); 
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = "$dia de " . $meses[$mes] . " del $year";
	return $fecha;
}
function comprobarSession(){
	if (!isset($_SESSION['admin'])) {
		header('Location: ' .  RUTA . 'admin/sesion.php');
	}
}

function eliminar_tildes($cadena){
 
    //Codificamos la cadena en formato utf8 en caso de que nos de errores
    $cadena = utf8_encode($cadena);
 
    //Ahora reemplazamos las letras
    $cadena = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $cadena);
 
    $cadena = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $cadena );
 
    $cadena = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $cadena );
 
    $cadena = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $cadena );
 
    $cadena = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $cadena );
 
    $cadena = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $cadena
    );
 
    return $cadena;
}

?>
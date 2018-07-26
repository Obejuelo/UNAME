<?php 


require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_eventos);

if (!$conexion) {
    header("Locaton: error.php");
} 

//$notas = obtener_nota($noticias_config['notas_por_pagina'], $conexion);
$notas = obtener_eventos($conexion);

rsort($notas);
// if (!$notas) {
//     header('Location: error.php');
// } 

require('php/index.php');
?>
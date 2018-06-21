<?php session_start();

if (!isset($_SESSION['unm'])) {
    header ("Location: sesion");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/fontawesome-all.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <div class="logo">
                    <h2>Dashboard</h2>
                </div>
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="index"><i class="icon-doc-text"></i><span>Noticias</span></a>
                    <a href="agenda"><i class="icon-book"></i><span>Agenda</span></a>
                    <a href="galery"><i class="icon-picture"></i><span>Galería</span></a>
                    <a href="report"><i class="icon-doc-text"></i><span>Reportes</span></a>
                    <a href="users"><i class="fas fa-user"></i><span> Usuarios</span></a>
                    <a href="cerrar"><i class="icon-logout"></i><span>Salir</span></a>
                </nav>
            </div>
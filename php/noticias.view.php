<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Noticias-Universidad Nacionalista México</title>
    <meta name="author" content="Obed Vicente Hernández Ramírez">
    <meta name="owner" content="Universidad Nacionalista México">
    <meta name="theme-color" content="rgb(12,83,59)">
    <link rel="icon" type="image/png" href="image/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.bach.css">
    <link rel="stylesheet" href="css/galeria.css">
    <link rel="stylesheet" href="css/thumbnail-gallery.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/slider.css">
    <script src="js/fontawesome-all.min.js"></script>
</head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navegacion" id="posicion">
        <div class="container">
            <a href="index" class="navbar-brand"><img src="image/unm.png" alt="" class="img-nav"></a>
            <div class="unm mr-5"><a href="index"><h1 id="unm">Universidad Nacionalista México</h1></a></div>
            <div class="uname mr-5"><a href="index"><h1 id="uname">UNM</h1></a></div>
            <div class="social ">
                <a href="https://www.facebook.com/UNIVERSIDADNACIONALISTAMEXICO/" target="_blank"><i class="fab fa-facebook-square icono" id="icono1"></i></a>
                <a href="https://www.instagram.com/universidad_mexico/?hl=es-la" target="_blank"><i class="fab fa-instagram icono" id="icono2"></i></a>
                <a href="https://twitter.com/Universidad_mex?lang=es"><i class="fab fa-twitter-square icono" id="icono3"></i></a>
                <a href="https://www.youtube.com/channel/UC7-y9I0oNAAhYj5JHKxVBUw"><i class="fab fa-youtube-square icono" id="icono4"></i></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbar" aria-expanded="false" aria-label="mi menu" id="show-menu">
                <span class="navbar-toggler-icon" id="btn-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="index" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="somos/somos" class="nav-link dropdown-toggle" id="mi_menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">¿Quienes somos?</a>
                        <div class="dropdown-menu" aria-labelledby="mi_menu">
                            <div class="sub-menu"><a href="somos/claus_lic" class="dropdown-item">Directorio</a>
                                <div class="menu-sub"><a href="somos/claus_lic">Claustro docente</a></div>
                                <div class="menu-sub2"><a href="somos/directivos">Directivos</a></div>
                            </div>
                            <a href="somos/instalaciones" class="dropdown-item">Instalaciones</a>
                            <a href="somos/filosofia" class="dropdown-item">Filosofía Institucional</a>
                            <a href="somos/historia" class="dropdown-item">Historia</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                            <a href="oferta.html" class="nav-link dropdown-toggle" id="mi_menu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oferta académica</a>
                            <div class="dropdown-menu" aria-labelledby="mi_menu2">
                                <a href="oferta/posgrado" class="dropdown-item">Posgrados</a>
                                <a href="oferta/superior" class="dropdown-item">Licenciaturas</a>
                                <a href="oferta/bachillerato" class="dropdown-item">Bachillerato general</a>
                                <a href="oferta/spam" class="dropdown-item">Secundaria y Preparatoria Abierta</a>
                                <a href="oferta/inter" class="dropdown-item">Internacionalización</a>
                            </div>
                        </li>
                    <li class="nav-item">
                        <a href="noticias" class="nav-link">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a href="galeria" class="nav-link">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a href="contacto" class="nav-link">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.sesweb.mx/login.aspx?ReturnUrl=%2f" class="nav-link" target="_blank">Plataforma</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid titulo">
        <div class="row justify-content-center">
            <div class="col-12 align-bach"><p class="h1 text-center">NOTICIAS</p></div>
        </div>
    </div>
    
    <section class="container">
        <div class="row mt-2 justify-content-around">
            <?php foreach($notas as $nota): ?>
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card card-nota">
                    <a href="single?id=<?php echo $nota['id']; ?>" class="link-titulo">
                        <!--IMAGEN en el div-->
                        <div class="cabecera-img" style="background: url('<?php echo RUTA; ?>image/noticias/<?php echo $nota['imagen']; ?>'); background-position: center; background-size: cover;">
                        </div>
                    </a>
                    <a href="single?id=<?php echo $nota['id']; ?>" class="link-titulo"><p class="h5 card-title text-center"><?php echo substr($nota['titulo'], 0, 85); ?></p></a>
                    <div class="card-body">
                        <p class="card-text text-justify h6"><?php echo substr($nota['texto'], 0, 256); ?>...</p>
                        <p class="text-info fixed-bottom text-center"><small><?php echo fecha($nota['fecha']); ?></small></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php // require 'paginacion.php' ?>
    <footer>
        
        <div class="container my-3" class="text-left">
            <div class="row d-flex justify-content-around">
            <div class="w-100 mt-3"></div>
                <div class="col-md-auto">
                    <p class=""><i class="fas fa-envelope"></i> vinculacion@universidadmexico.edu.mx</p>
                    <p class=""><i class="fas fa-map-marker-alt ubicacion"></i> Camino Nacional Núm. 99, Tlalixtac de Cabrera (<small><em>Campus</em> Central</small>)</p>
                    <p class=""><i class="fas fa-phone"></i> (951) 133 20 87</p>
                </div>
                <div class="col-md-auto">
                    <p class=""><i class="fas fa-envelope"></i> sistemas@universidadmexico.edu.mx</p>
                    <p class=""><i class="fas fa-map-marker-alt ubicacion"></i> Monte Albán Núm. 311 (San José la Noria)</p>
                    <p class=""><i class="fas fa-phone"></i> (951) 51 6 09 41</p>
                </div>
                <div class="col-md-auto d-none d-lg-block redes-sociales">
                    <a class="text-left" href="https://www.facebook.com/UNIVERSIDADNACIONALISTAMEXICO/" target="_blank"><i class="fab fa-facebook-square" id="foot1"></i> Facebook</a>
                    <a class="text-left" href="https://www.instagram.com/universidad_mexico/?hl=es-la" target="_blank"><i class="fab fa-instagram" id="foot2"></i> Instagram</a>
                    <a class="text-left" href="https://www.youtube.com/channel/UC7-y9I0oNAAhYj5JHKxVBUw" target="_blank"><i class="fab fa-youtube" id="foot3"></i> YouTube</a>
                    <a class="text-left" href="https://twitter.com/Universidad_mex?lang=es" target="_blank"><i class="fab fa-twitter" id="foot4"></i> Twitter</a>
                </div>
            </div>
        </div>
        <div class="derechos mt-3">
            <li>© 2018 Universidad Nacionalista México. Todos los derechos reservados.</li>
            <li><a href="privacidad">AVISO DE PRIVACIDAD</a></li>
            <li><a href="admin/index">Subir noticia</a></li>

        </div>
        <div style="height: 15px;"></div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agenda-Universidad Nacionalista México</title>
    <meta name="author" content="Obed Vicente Hernández Ramírez">
    <meta name="owner" content="Universidad Nacionalista México">
    <meta name="theme-color" content="rgb(12,83,59)">
    <link rel="icon" type="image/png" href="image/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
            <a href="/pagina_unm/" class="navbar-brand"><img src="image/unm.png" alt="" class="img-nav"></a>
            <div class="unm mr-5"><a href="/pagina_unm/"><h1 id="unm">Universidad Nacionalista México</h1></a></div>
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
                                <a href="inter" class="dropdown-item">Internacionalización</a>
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
            <div class="col-12 align-bach"><p class="h1 text-center">AGENDA ACADÉMICA</p></div>
        </div>
    </div>
    
    <section class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-md-8 event-view">
                <img src="<?php echo RUTA; ?>/image/eventos/<?php echo $nota['img']; ?>" alt="" class="img-fluid img-single">
                <p class="h3 text-center mb-4"><?php echo $nota['titulo']; ?></p>
                <p class="text-justify text-secondary"><?php echo nl2br($nota['texto']); ?></p>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class="col">
                        <h2 class="mb-2 text-center">Regístrate</h2>
                        <hr>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'].'?id='.$nota['id'].'&&titulo='.$nota['titulo']); ?>" method="post" class="form event-form">
                            <input type="text" id="nombre" class="form-control mb-3" name="nombre" placeholder="Nombre(s) *" required value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
                            <input type="text" id="last" class="form-control mb-3" name="apellido" placeholder="Apellido(s) *" required value="<?php if(!$enviado && isset($apellido)) echo $apellido ?>">
                            <input type="email" class="form-control mb-3" name="email" placeholder="e-mail *" required id="email">
                            <input type="tel" class="form-control mb-3" name="phone" placeholder="Teléfono (opcional)" value="<?php if(!$enviado && isset($phone)) echo $phone ?>">
                            <input type="text" class="form-control mb-3" name="nivel" placeholder="Nivel y área académica" value="<?php if(!$enviado && isset($nivel)) echo $nivel ?>">
                            <select name="state" id="state" class="custom-select"> value="<?php if(!$enviado && isset($state)) echo $state ?>">
                                <option value="" selected="">Procedencia</option>
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California">Baja California</option>
                                <option value="Baja California Sur">Baja California Sur </option>
                                <option value="Campeche">Campeche</option>
                                <option value="Chiapas">Chiapas</option>
                                <option value="Ciudad de México">Ciudad de México</option>
                                <option value="Coahuila">Coahuila</option>
                                <option value="Colima">Colima</option>
                                <option value="Durango">Durango</option>
                                <option value="Guanajuato">Guanajuato</option>
                                <option value="Guerrero">Guerrero</option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="México">México</option>
                                <option value="Michoacán">Michoacán</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo León">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Querétaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosí">San Luis Potosí</option>
                                <option value="Sinaloa">Sinaloa</option>
                                <option value="Sonora">Sonora</option>
                                <option value="Tabasco">Tabasco</option>
                                <option value="Tamaulipas">Tamaulipas</option>
                                <option value="Tlaxcala">Tlaxcala</option>
                                <option value="Veracruz">Veracruz</option>
                                <option value="Yucatán">Yucatán</option>
                                <option value="Zacatecas">Zacatecas</option>
                            </select>
                            <small class="form-text text-muted mb-3">* campos obligatorios</small>
                            <?php if (!$enviado == ''): ?>
                                <div class="success my-3" id="mensaje">
                                    <p class="text-center text-muted"><?php echo $enviado; ?></p>
                                </div>
                                <script>
                                    setTimeout(function(){
                                        //document.getElementById('mensaje').remove();
                                        $('#mensaje').slideUp(500);
                                    }, 4000); 
                                </script>
                            <?php endif ?>
                            <?php if(!$errores == ''): ?>
                                <div class="error my-3" id="mensaje">
                                    <p class="text-center text-muted"><?php echo $errores; ?></p>
                                </div>
                                <script>
                                    setTimeout(function(){
                                        //document.getElementById('mensaje').remove();
                                        $('#mensaje').slideUp(400);
                                        $('#email').addClass('is-invalid');
                                        //$('#nombre').addClass('is-valid');
                                        //$('#last').addClass('is-valid');
                                    }, 3000); 
                                </script>
                            <?php endif ?>
                            <div class="button">
                                <input type="submit" value="Enviar" class="btn btn-dark btn-sm" id="button">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-5">
        <hr>
        <div class="row justify-content-center">
            <div class="col-12"><h2 class="text-center mb-3">Más eventos</h2></div>

        <?php foreach ($notas as $nota): ?>
            <div class="col-md-6 col-lg-3 mb-1">
                <div class="card card-eventos eventos">
                    <div class="evento-img" style="background: url('<?php echo RUTA; ?>image/eventos/<?php echo $nota['img']; ?>'); background-position: center; background-size: cover;">
                        </div>
                    <div class="card-body justify-content-center">
                        <h5 class="text-center"><?php echo substr($nota['titulo'], 0, 85); ?></h5>
                        <p class="card-text text-justify"><?php echo substr($nota['texto'], 0, 85); ?>...</p>
                    </div>
                    <a href="agenda?id=<?php echo $nota['id']; ?>&&titulo=<?php echo $nota['titulo']; ?>" class="btn btn-dark btn-sm boton-evento">Ver Más</a>
                </div>
                
            </div>
        <?php endforeach ?>

        </div>
    </section>
<script>
let nombre = document.getElementById('nombre');
let lastName = document.getElementById('last');
let email = document.getElementById('email');
let button = document.getElementById('button');

nombre.addEventListener('blur', function(){
    validacion(nombre);
});

lastName.addEventListener('blur', function(){
    validacion(lastName);
});

email.addEventListener('blur', function(){
    const correo = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!correo.test(email.value)) {
       $(email).addClass('is-invalid');
    } else {
        $(email).removeClass('is-invalid');
        $(email).addClass('is-valid');
    }
    
});

function validacion(elemento){
    let valor = elemento.value;

    if (valor.length <= 3) {
       $(elemento).addClass('is-invalid');
    } else {
        $(elemento).removeClass('is-invalid');
        $(elemento).addClass('is-valid');
    }
}


</script>
    <?php require 'php/footer.php' ?>
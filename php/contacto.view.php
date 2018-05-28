<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto-Universidad Nacionalista México</title>
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
            <div class="col-12 align-bach"><p class="h1 text-center">CONTACTO</p></div>
        </div>
    </div>
    <section class="container">
        <div class="row my-5">
            <div class="col-md-6 mt-3">
                <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post" class="form">
	                <div class="form-group">
	                    <label for="" >Nombre</label>
	                    <input type="text" name="nombre" placeholder="Ingresa tu nombre" class="form-control" required>
	                </div>
	                <div class="form-group">
	                    <label for="" >Correo</label>
	                    <input type="email" name="correo" placeholder="Ingresa tu correo" class="form-control" required>
	                    <small class="form-text text-muted">Nunca compartiremos tu correo</small>
	                </div>
	                <div class="form-group">
	                    <label for="" >Mensaje</label>
	                    <textarea name="mensaje" id="" class="form-control" placeholder="Escribe un mensaje" required></textarea>
	                </div>
	                <?php if (!empty($errores)): ?>
						<div class="error">
							<?php echo $errores; ?>
						</div>
					<?php elseif($enviado): ?>
                        <div class="success" id="mensaje">
                            <p class="text-center text-muted">Mensaje enviado correctamente</p>
                        </div>
                        <script>
                            setTimeout(function(){
                                document.getElementById('mensaje').remove();
                            }, 3000); 
                        </script>
					<?php endif ?>
	                <input type="submit" name="submit" value="Enviar" class="btn btn-dark mt-2" id="enviar">
                </form>
            </div>
            <div class="col-md-6 mt-3 align-self-center">
                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d953.5584616463299!2d-96.66247037078044!3d17.061210499267197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c7226e680383ed%3A0xd58ec2b3403a30c!2sUniversidad+Nacionalista+M%C3%A9xico!5e0!3m2!1ses-419!2smx!4v1520882151076"frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <div class="foot" style="height: 80px;"></div>
    
<?php require 'php/footer.php' ?>
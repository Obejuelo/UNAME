<?php require '../oferta/header.php' ?>

    <div class="container-fluid titulo">
        <div class="row justify-content-center">
            <div class="col-12 align-bach"><p class="h1 text-center">Inicio de Sesión</p></div>
        </div>
    </div>
    
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 my-5">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
                    <div class="row justify-content-center">
                        <div class="col-auto mt-3 mb-3">
                            <img src="../image/unm.png" class="im-fluid" alt="" style="width: 70px;">
                        </div>
                    </div>
                    <div class="form-group mx-3">
                        <label for="">Usuario</label class="form-control">
                        <input type="text" name="usuario" placeholder="Usuario" required class="form-control" autofocus="">
                    </div>
                    <div class="form-group mx-3">
                        <label for="">Contraseña</label class="form-control">
                        <input type="password" name="pass" placeholder="Contraseña" required class="form-control">
                    </div>
                    <?php if (!empty($error)): ?>
						<div class="error" style="border-radius: 5px;">
							<?php echo $error; ?>
						</div>
                    <?php endif ?>
                    <script>
                        setTimeout(() => {
                            document.querySelector('.error').remove();
                        }, 3000);
                    </script>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <input type="submit" name="submit" value="Entrar" class="btn btn-dark my-3">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div style="height: 240px;"></div>
    <footer>
        
        <div class="container my-3" class="text-left">
            <div class="row d-flex justify-content-around">
            <div class="w-100 mt-3"></div>
                <div class="col-md-auto">
                    <p class=""><i class="fas fa-envelope"></i> vinculacion@universidadmexico.edu.mx</p>
                    <p class=""><i class="fas fa-map-marker-alt"></i> Tlalixtac de Cabrera (Campus central)</p>
                    <p class=""><i class="fas fa-phone"></i> (951) 133 20 87</p>
                </div>
                <div class="col-md-auto">
                    <p class=""><i class="fas fa-envelope"></i> sistemas@universidadmexico.edu.mx</p>
                    <p class=""><i class="fas fa-map-marker-alt"></i> Monte Alban Num. 311 (San José la Noria)</p>
                    <p class=""><i class="fas fa-phone"></i> (951) 51 6 09 41</p>
                </div>
                <div class="col-md-auto d-none d-lg-block redes-sociales">
                    
                    <a class="text-left" href="https://www.facebook.com/UNIVERSIDADNACIONALISTAMEXICO/" target="_blank"><i class="fab fa-facebook-square"></i> Facebook</a>
                    <a class="text-left" href="https://www.instagram.com/universidad_mexico/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                    <a class="text-left" href="https://www.youtube.com/channel/UC7-y9I0oNAAhYj5JHKxVBUw" target="_blank"><i class="fab fa-youtube"></i> YouTube</a>
                    <a class="text-left" href="https://twitter.com/Universidad_mex?lang=es" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                </div>
            </div>
        </div>
        <div class="derechos mt-3">
            <li>© 2018 Universidad Nacionalista México. Todos los derechos reservados.</li>
            <li><a href="../privacidad">AVISO DE PRIVACIDAD</a></li>
        </div>
        <div style="height: 15px;"></div>
    </footer>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>
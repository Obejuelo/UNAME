<?php require 'header.php'; ?>

            <main class="main col">
                <div class="row">
                    <div class="columna col-lg-7">
                        <div class="widget nueva_entrada">
                            <h3 class="titulo">NOTICIAS</h3>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="post">
                                <input type="text" name="titulo" placeholder="Titulo de la noticia" required>
                                <textarea name="texto" placeholder="" required=""></textarea>
                                <input type="file" name="imagen" class=""><br>
                                <div class="d-flex justify-content-end">
                                    <button type="submit"><i class="icon icon-edit"></i> Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="columna col-lg-5">
                        <div class="widget estadisticas">
                            <h3 class="titulo">Entradas</h3>
                            <div class="contenedo d-flex flex-wrap">
                                <div class="row justify-content-center mt-5">
                                    <?php foreach ($notas as $nota): ?>
                                    <div class="col-md-6 mb-3">
                                        <div class="card card-eventos border-success">
                                            <img src="image/slider/slider2.JPG" alt="" class="img-fluid">
                                            <div class="card-body justify-content-center">
                                                <h5 class="text-center"><?php echo substr($nota['titulo'], 0, 21); ?></h5>
                                                <p class="card-text text-success text-justify"><small><?php echo substr($nota['texto'], 0, 87); ?>..</small></p>
                                                <div class="dashboard">
                                                    <a href="borrar?id=<?php echo $nota['id']; ?>" class="text-danger">Eliminar</a>
                                                    <a href="editar?id=<?php echo $nota['id']; ?>">Editar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Usar la CDN requiere acceso a Internet -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 

	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	-->
</body>

</html>
<?php require 'header.php'; ?>

            <main class="main col">
                <div class="row">
                    <div class="columna col-lg-7">
                        <div class="widget nueva_entrada">
                            <h3 class="titulo">Galería fotográfica</h3>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="post">
                                <textarea name="descripcion" placeholder="Descripción" required=""></textarea>
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
                                    <div class="card-columns">
                                        <?php foreach($imagenes as $imagen): ?>
                                        <div class="card">
                                            <img src="<?php echo RUTA; ?>image/galeria/<?php echo $imagen['imagen']; ?>" alt="" class="img-fluid">
                                            <div class="dashboard">
                                                <a href="borrarImg.php?id=<?php echo $imagen['id']; ?>" class="text-danger">eliminar</a>
                                                <a href="editarImg.php?id=<?php echo $imagen['id']; ?>" class="text-success">editar</a>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
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
<?php require 'header.php'; ?>

            <main class="main col">
                <div class="row">
                    <div class="columna col-md-12 col-lg-10">
                        <div class="widget nueva_entrada">
                            <h3 class="titulo">REPORTES</h3>
                            <div class="row justify-content-start mt-5">
                                <?php foreach ($notas as $nota): ?>
                                    <div class="col-md-6 col-lg-6 col-xl-5 mb-3">
                                        <div class="card card-eventos border-success">
                                            <div class="evento-img" style="background: url('<?php echo RUTA; ?>image/eventos/<?php echo $nota['img']; ?>'); background-position: center; background-size: cover;height: 220px;">
                                            </div>
                                            <div class="card-body justify-content-center">
                                                <h5 class="text-center"><?php echo substr($nota['titulo'], 0, 21); ?></h5>
                                                <p class="card-text text-success text-justify"><small><?php echo substr($nota['texto'], 0, 250); ?>..</small></p>
                                                <div class="dashboard">
                                                    <a href="eventReport?id=<?php echo $nota['id']; ?>&&titulo=<?php echo $nota['titulo']; ?>" target="_blank" class="text-info">Generar reporte</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
<?php $numero_paginas = numero_paginas($noticias_config['notas_por_pagina'], $conexion); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Universidad Nacionalista México</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-auto">
                <ul class="pagination pagination">
                    <?php if (pagina_actual() === 1): ?>
                        <li class="page-item disabled">
                            <span class="page-link" aria-hidden="true">&laquo;</span>
                        </li>
                    <?php else: ?>
                        <li class="page-item"><a href="noticias.php?p=<?php echo pagina_actual() - 1 ?>" class="page-link">&laquo;</a></li>
                    <?php endif; ?>

                    <?php for($i = 1; $i <= $numero_paginas; $i++): ?>
                        <?php if (pagina_actual() === $i): ?>
                            <li class="page-item active">
                                <a href="" class="page-link"><?php echo $i; ?></a>
                            </li>
                        <?php else: ?>
                            <li class="page-item"><a href="noticias.php?p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                        <?php endif; ?>

                    <?php endfor; ?>

                    <?php if(pagina_actual() == $numero_paginas): ?>
                        <li class="page-item disabled">
                            <span class="page-link" aria-hidden="true">&raquo;</span>
                        </li>
                    <?php else: ?>
                        <li><a href="noticias.php?p=<?php echo pagina_actual() + 1; ?>" class="page-link">&raquo;</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>	
</body>
</html>
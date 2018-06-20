<?php require 'header.php'; ?>

            <main class="main col">
                <div class="row">
                    <div class="columna col-lg-7">
                        <div class="widget nueva_entrada password">
                            <h3 class="titulo">USUARIOS</h3>
                            <form action"<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                <input type="password" placeholder="Contraseña actual" name="pass" required id="pass">
                                <input type="password" placeholder="Nueva contraseña" name="new_pass" required id="new_pass"><img src="font/eye.png" class="eye ml-1">
                                <input type="password" placeholder="Confirma contraseña" name="confirm_pass" required id="confirm_pass"><img src="font/eye.png" class="eye ml-1">
                                <?php if (!empty($error)): ?>
                                    <div class="error mb-3" id="error" style="width: 90%; border-radius: 5px;">
                                        <?php echo $error; ?>
                                    </div>
                                    <script>
                                        setTimeout(function(){
                                            document.getElementById('error').remove();
                                        }, 3000); 
                                    </script>
                                <?php elseif($mensaje): ?>
                                    <div class="success mb-3" id="mensaje" style="width: 90%; border-radius: 5px;">
                                        <p class="text-center">tu contraseña fue cambiada de forma exitosa. </p>
                                    </div>
                                    <script>
                                        setTimeout(function(){
                                            document.getElementById('mensaje').remove();
                                        }, 3000); 
                                    </script>
                                <?php endif ?>
                                <input type="submit" value="Cambiar contraseña" class"btn btn-dark">
                            </form>
                        </div>
                    </div>

                    <div class="columna col-lg-5">
                        <div class="widget estadisticas">
                            
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/app.js"></script>
    <!-- Usar la CDN requiere acceso a Internet -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	-->
</body>

</html>
<?php include_once('view/templates/head.php'); ?>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">¡BIENVENIDO!</h1>
                    </div>
                    <form id="frmAjaxLogin" class="user">
                        <div class="mb-4">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required>
                        </div>
                        <div class="mb-4">
                            <label for="contrasena" class="form-label">Contraseña</label>
                            <input type="password" id="contrasena" name="contrasena" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <!-- <div class="form-check mb-4">
                            <input type="checkbox" class="form-check-input" id="customCheck">
                            <label class="form-check-label" for="customCheck">Recordar</label>
                        </div> -->
                        <button id="btn-loginU" class="btn btn-primary w-100">INGRESAR</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="register.html">Crear una cuenta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('view/templates/footer.php'); ?>
<?php include_once('view/templates/head.php'); ?>
<?php include_once('view/templates/navAdministrador.php'); ?>


<div class="container d-flex justify-content-center align-items-center vh-100">

    <!-- Outer Row -->
    <div class="row justify-content-center w-100">

        <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="card o-hidden border-5 shadow-lg my-5">

                <div class="card-body pb-2">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">REGISTRA NUEVO USUARIO</h1>
                                </div>
                                <form action="usuario" id="" method="POST" class="row g-3" enctype="multipart/form-data">
                                    <div class="col-md-12">
                                        <label for="cbo_area" class="form-label">Area</label>
                                        <select id="cbo_area" class="form-select" name="cbo_area">
                                            <?php foreach ($area as $data) : ?>
                                                <option value="<?php echo $data->id_area ?>"><?php echo $data->nom_area ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="cbo_usu" class="form-label">Usuario</label>
                                        <input type="text"  class="form-control" name="cbo_usu" id="cbo_usu">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="cbo_email" class="form-label">Correo (Opcional)</label>
                                        <input type="email" class="form-control" name="cbo_email" id="cbo_email">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary" id="btn-registrar-solicitud" name="btn-registrar-solicitud">Crear Solicitud</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('view/templates/footer.php'); ?>
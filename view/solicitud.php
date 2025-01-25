<?php include_once('view/templates/head.php'); ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        
        <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="card o-hidden border-5 shadow-lg my-5">

                <div class="card-body pb-2">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">¡INGRESA TU SOLICITUD!</h1>
                                </div>

                                <form action="solicitud" id="" method="POST" class="row g-3" enctype="multipart/form-data">
                                    <div class="col-md-6">
                                        <label for="cbo_nom" class="form-label">N°</label>
                                        <input type="text" class="form-control" id="cbo_nom" name="cbo_nom" value="<?php echo $suma ?>" readonly>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="cbo_tipo" class="form-label">Tipo</label>
                                        <select id="cbo_tipo" name="cbo_tipo" class="form-select">
                                            <?php foreach ($tipo as $data) : ?>
                                                <option value="<?php echo $data->id_tipo ?>"><?php echo $data->nom_tipo ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="cbo_piso" class="form-label">Piso</label>
                                        <select id="cbo_piso" name="cbo_piso" class="form-select">
                                            <?php foreach ($piso as $data) : ?>
                                                <option value="<?php echo $data->id_piso ?>"><?php echo $data->num_piso ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="cbo_area" class="form-label">Area</label>
                                        <select id="cbo_area" class="form-select" name="cbo_area">
                                            <?php foreach ($area as $data) : ?>
                                                <option value="<?php echo $data->id_area ?>"><?php echo $data->nom_area ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="cbo_usuario" class="form-label">Usuario</label>
                                        <select id="cbo_usuario" name="cbo_usuario" class="form-select">
                                            <option value="">
                                                Seleccione una Area
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="cbo_detalle" class="form-label">Detalle (opcional)</label>
                                        <textarea class="form-control" name="cbo_detalle" id="cbo_detalle" placeholder="breve detalle"></textarea>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <label for="cbo_imagen" class="form-label">Imagen</label>
                                        <input type="file" class="form-control" name="cbo_imagen" id="cbo_imagen" accept="image/">
                                    </div> -->
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
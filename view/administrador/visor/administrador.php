<?php include_once('view/templates/head.php'); ?>
<?php include_once('view/templates/nav.php'); ?>

<div class="container shadow-lg p-3 mb-5 bg-body rounded">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" style="text-transform:uppercase;">SEGUIMIENTO DE INCIDENCIA DEL DÍA <?php echo date('d-m-Y') ?></h1>
    <p class="mb-4">Actividades para el seguimiento de incidencias (Clinico, Software, Hardware)</p>

    <!-- Filtros
    <div class="row mb-4">
        <div class="col-md-3">
            <label for="txt_buscador" class="form-label">Buscador</label>
            <input type="text" class="form-control" id="txt_buscador"
                name="txt_buscador" autocomplete="off"
                placeholder="Digite N° de Ticket o el Usuario">
        </div>
        <div class="col-md-3">
            <label for="filterPiso" class="form-label">Filtrar por Piso</label>
            <select id="filterPiso" class="form-select">
                <option value="">Todos</option>
                <?php foreach ($piso as $data) : ?>
                    <option value="<?php echo $data->id_piso ?>"><?php echo $data->num_piso ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-3">
            <label for="filterTecnico" class="form-label">Filtrar por Técnico</label>
            <select id="filterTecnico" class="form-select">
                <option value="">Todos</option>
                <?php foreach ($tecnico as $data) : ?>
                    <option value="<?php echo $data->id_tec ?>"><?php echo $data->nom_tec ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-3">
            <label for="filterTipo" class="form-label">Filtrar por Tipo</label>
            <select id="filterTipo" class="form-select">
                <option value="">Todos</option>
                <?php foreach ($tipo as $data) : ?>
                    <option value="<?php echo $data->id_tipo ?>"><?php echo $data->nom_tipo ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div> -->


    <!-- <input type="text" id="count_ticket" value="1" hidden> -->

    <!-- Table -->
    <table id="example" class="table table-responsive table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">N° ticket</th>
                <th class="text-center">Usuario</th>
                <th class="text-center">Piso</th>
                <th class="text-center">Descripcion</th>
                <th class="text-center">Tipo</th>
                <th class="text-center">Tecnico</th>
                <th class="text-center">Estado</th>
            </tr>
        </thead>
        <tbody id="ticket-body">

        </tbody>

    </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalles del Ticket</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="registrarSolicitud" id="miFormulario" method="POST" class="row g-3" enctype="multipart/form-data">
                    <input type="hidden" name="id_ticlet" id="ticketId" value="">
                    <div class="col-mb-3">
                        <label for="cbo_prio" class="form-label">Nivel Prioridad</label>
                        <select name="cbo_prio" id="cbo_prio" class="form-select">
                            <option value="">Todos</option>
                            <?php foreach ($prioridad as $data) : ?>
                                <option value="<?php echo $data->id_prio ?>"><?php echo $data->nom_prio ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-mb-3">
                        <label for="cbo_cat" class="form-label">Tipo de Categoria</label>
                        <select name="cbo_cat" id="cbo_cat" class="form-select">
                            <option value="">Todos</option>
                            <?php foreach ($categoria as $data) : ?>
                                <option value="<?php echo $data->id_cat ?>"><?php echo $data->nom_cat ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-mb-3">
                        <label for="cbo_tec" class="form-label">Tecnico Asignado</label>
                        <select name="cbo_tec" id="cbo_tec" class="form-select">
                            <option value="">Todos</option>
                            <?php foreach ($tecnico as $data) : ?>
                                <option value="<?php echo $data->id_tec ?>"><?php echo $data->nom_tec ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-mb-3">
                        <label for="cbo_esta" class="form-label">Estado</label>
                        <select name="cbo_esta" id="cbo_esta" class="form-select">
                            <option value="">Todos</option>
                            <?php foreach ($estado as $data) : ?>
                                <option value="<?php echo $data->id_esta ?>" data-nom-esta="<?php echo $data->nom_esta ?>">
                                    <?php echo $data->nom_esta ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-12" id="observacionContainer" style="display: none" ;>
                        <label for="cbo_obs" class="form-label">Observación</label>
                        <textarea class="form-control" name="cbo_obs" id="cbo_obs" placeholder="Detalle de Observación"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="saveInfoButton">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</div>
<?php include_once('view/templates/footer.php'); ?>
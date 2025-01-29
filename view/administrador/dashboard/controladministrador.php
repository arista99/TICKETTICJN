<?php include_once('view/templates/head.php'); ?>
<?php include_once('view/templates/nav.php'); ?>

<div class="container shadow-lg p-3 mb-5 bg-body rounded">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" style="text-transform:uppercase;">SEGUIMIENTO DE INCIDENCIA DEL DÍA <?php echo date('d-m-Y') ?></h1>
    <p class="mb-4">Actividades para el seguimiento de incidencias (Clinico, Software, Hardware)</p>

    <!-- Filtros -->
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
    </div>


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
</div>
<?php include_once('view/templates/footer.php'); ?>
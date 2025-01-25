<?php include_once('view/templates/head.php'); ?>
<?php include_once('view/templates/nav.php'); ?>

<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" style="text-transform:uppercase;">SEGUIMIENTO DE INCIDENCIA DEL DÍA <?php echo date('d-m-Y') ?></h1>
    <p class="mb-4">Actividades para el seguimiento de incidencias (Clinico, Software, Hardware)</p>


    <input type="text" id="count_ticket" value="1" hidden>

    <div class="row" id="card-ticket"></div>

    <!-- Modal -->
    <!-- <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Registrar Información</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="infoForm">
                        <div class="col-mb-3">
                            <label for="infoInput1" class="form-label">Nivel Prioridad</label>
                            <select name="" id="">
                                <?php foreach ($prioridad as $data) : ?>
                                    <option value="<?php echo $data->id_prio ?>"><?php echo $data->nom_prio ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-mb-3">
                            <label for="infoInput2" class="form-label">Tipo de Categoria</label>
                            <select name="" id="">
                                <?php foreach ($categoria as $data) : ?>
                                    <option value="<?php echo $data->id_cat ?>"><?php echo $data->nom_cat ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-mb-3">
                            <label for="infoInput2" class="form-label">Tecnico Asignado</label>
                            <select name="" id="">
                                <?php foreach ($tecnico as $data) : ?>
                                    <option value="<?php echo $data->id_tec ?>"><?php echo $data->nom_tec ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <input type="hidden" id="ticketId" name="ticketId">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="saveInfoButton">Guardar</button>
                </div>
            </div>
        </div>
    </div> -->



</div>
<?php include_once('view/templates/footer.php'); ?>
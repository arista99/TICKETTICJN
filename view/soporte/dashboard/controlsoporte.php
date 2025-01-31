<?php include_once('view/templates/head.php'); ?>
<?php include_once('view/templates/nav.php'); ?>

<div class="container shadow-lg p-3 mb-5 bg-body rounded">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" style="text-transform:uppercase;">SEGUIMIENTO DE INCIDENCIA DEL DÍA <?php echo date('d-m-Y') ?></h1>
    <p class="mb-4">Actividades para el seguimiento de incidencias (Clinico, Software, Hardware)</p>

    <!-- <input type="text" id="count_ticket" value="1" hidden> -->

    <!-- Table -->
    <table id="example" class="table table-responsive table-bordered" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">N° ticket</th>
                <th class="text-center">Usuario</th>
                <th class="text-center">Piso</th>
                <th class="text-center">Area</th>
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
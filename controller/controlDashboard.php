<?php
//MODEL
require_once('model/modelDashboard.php');

//DATA
include_once('data/ticket.php');

class ControlDashboard
{

    //VARIABLKE MODELO
    public $SOLICITUD;

    public function __construct()
    {
        $this->SOLICITUD = new ModeloDashboard();
    }

    //VISTA EN DONDE SE CARGARA LOS DATOS AUTOMATICAMENTE 
    public function Dashboard()
    {
        $prioridad = $this->SOLICITUD->prioridad();
        $categoria = $this->SOLICITUD->categoria();
        $piso = $this->SOLICITUD->piso();
        $tecnico = $this->SOLICITUD->tecnico();
        $estado = $this->SOLICITUD->estado();
        $tipo = $this->SOLICITUD->tipo();

        include_once('view/administrador/visor/administrador.php');
    }

    public function obtenerListaTicket()
    {
        $ticket = $this->SOLICITUD->ticket();

        foreach ($ticket as $data) {
            echo '<tr id="' . $data->num_ticket . '">';
            echo '    <td class="text-primary text-center">' . $data->num_ticket . '</td>';
            echo '    <td class="text-primary text-center">' . $data->nom_usu . '</td>';
            echo '    <td class="text-primary text-center">' . $data->num_piso . '</td>';
            echo '    <td class="text-primary text-center">' . $data->descrip_ticket . '</td>';
            echo '    <td class="text-primary text-center">' . $data->nom_tipo . '</td>';
            echo '    <td class="text-primary text-center">' . $data->nom_tec . '</td>';
            echo '    <td class="text-center">';
            echo '        <button type="button" class="btn btn-primary open-modal text-uppercase" ';
            echo '            data-id="' . $data->id_ticket . '" ';
            echo '            data-bs-toggle="modal" ';
            echo '            data-bs-target="#exampleModal" ';
            echo '            id="">';
            echo '             ' . $data->nom_esta . '';
            echo '        </button>';
            echo '    </td>';
            echo '</tr>';
        }
    }

    public function registrarSolicitud()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $ticket = new Ticket();
                $ticket->setid_ticket($_POST['id_ticket']);
                $ticket->setid_prio($_POST['cbo_prio']);
                $ticket->setid_cat($_POST['cbo_cat']);
                $ticket->setid_tec($_POST['cbo_tec']);
                $ticket->setid_esta($_POST['cbo_esta']);

                //llmando al inser de modelo solicitud
                $update = $this->SOLICITUD->updateTicket($ticket);
                // Responder con JSON para que AJAX pueda manejar la respuesta
                if ($update) {
                    echo json_encode(['success' => true, 'message' => 'Ticket actualizado correctamente']);
                } else {
                    echo json_encode(['success' => false, 'message' => 'Error al actualizar el ticket']);
                }
            } else {
                // Si no es una solicitud POST, enviar un mensaje de error
                echo json_encode(['success' => false, 'message' => 'Método no permitido']);

                // if ($update) {
                //     // header('Location:Dashboard');
                // } else {
                //     // header('Location:Dashboard');
                // }
            }
        } catch (Exception $th) {
            // Manejo de excepciones: devolver el mensaje de error
            echo json_encode(['success' => false, 'message' => $th->getMessage()]);
            // echo $th->getMessage();
        }
    }

    public function filtrarxSolicitud()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Capturar los datos enviados por AJAX
                $buscador = isset($_POST['buscador']) ? trim($_POST['buscador']) : '';
                $piso = isset($_POST['piso']) ? trim($_POST['piso']) : '';
                $tecnico = isset($_POST['tecnico']) ? trim($_POST['tecnico']) : '';
                $tipo = isset($_POST['tipo']) ? trim($_POST['tipo']) : '';
                //llmando al inser de modelo solicitud
                $tickets  = $this->SOLICITUD->filtrarSolicitud($buscador, $piso, $tecnico, $tipo);
                // Responder con JSON para que AJAX pueda manejar la respuesta
                if ($tickets) {
                    echo json_encode(['success' => true, 'data' => $tickets]);
                } else {
                    echo json_encode(['success' => false, 'message' => 'No se encontraron resultados']);
                }
            } else {
                // Si no es una solicitud POST, enviar un mensaje de error
                echo json_encode(['success' => false, 'message' => 'Método no permitido']);
            }
        } catch (Exception $th) {
            // Manejo de excepciones: devolver el mensaje de error
            echo json_encode(['success' => false, 'message' => $th->getMessage()]);
            // echo $th->getMessage();
        }
    }

    // public function obtenerListaTicket()
    // {

    //     // Obtener el último ticket procesado desde la solicitud AJAX
    //     $ultimoTicketId = isset($_POST['ultimoTicketId']) ? (int)$_POST['ultimoTicketId'] : null;

    //     // Consultar los tickets
    //     $listaticket = $this->SOLICITUD->listaticket($ultimoTicketId);

    //     if (!empty($listaticket)) {
    //         foreach ($listaticket as $data) :
    //             echo '<div class="col-md-4 p-4">';
    //             echo '  <div class="card">';
    //             echo '    <div class="card-body">';
    //             echo '      <h4 class="card-title">' . $data->num_ticket . '</h4>';
    //             echo '      <p class="card-text">Tipo: ' . $data->nom_tipo . '</p>';
    //             echo '      <p class="card-text">Piso: ' . $data->num_piso . '</p>';
    //             echo '      <p class="card-text">Usuario: ' . $data->nom_usu . '</p>';
    //             echo '      <p class="card-text">Descripcion: ' . $data->descrip_ticket . '</p>';
    //             // echo '      <button type="button" class="btn btn-primary open-modal" data-bs-toggle="modal" data-bs-target="#infoModal" data-ticket-id="'. $data->num_ticket.'">Registrar Info</button>';
    //             echo '    </div>';
    //             echo '  </div>';
    //             echo '</div>';
    //         endforeach;
    //     } else {
    //         echo "SIN_CAMBIOS"; // Indicar que no hay cambios
    //     }
    // }
}

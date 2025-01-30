<?php
//MODEL
require_once('model/modelSolcitud.php');

//DATA
include_once('data/ticket.php');

class ControlIndex
{

    //VARIABLKE MODELO
    public $SOLICITUD;

    public function __construct()
    {
        $this->SOLICITUD = new ModeloSolicitud();
    }
    public function Index()
    {
        $area = $this->SOLICITUD->area();
        $tipo = $this->SOLICITUD->tipo();
        $piso = $this->SOLICITUD->piso();


        // var_dump($ticketID);
        include_once('view/solicitud.php');
    }

    //METODO PARA DEVOLVER EL NUMERO DE TICKETS
    public function obtenerTickets()
    {
        try {
            //contando las filas que hay 
            $count = $this->SOLICITUD->rowCount();

            if ($count->numer_ticket == 0) {
                $suma = 'T-0001';
            } else if ($count->numer_ticket == 1) {
                $suma = 'T-0002';
            } else if ($count->numer_ticket >= 2) {
                $suma = 'T-000' . $count->numer_ticket + 1;
            } 
            echo  $suma;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //METODO PARA DEVOLVER DATOS VIA AJAX
    public function obtenerUsuarios()
    {
        try {
            $id_area = filter_input(INPUT_POST, 'dato_mandar_servidor');

            $usuario = $this->SOLICITUD->usuario($id_area);

            foreach ($usuario as $usuario) :
                echo '<option value="' . $usuario->id_usu . '">' . $usuario->nom_usu . '</option>';
            endforeach;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    //Metodo para capturar los valores
    public function solicitud()
    {
        try {

            $ticket = new Ticket();
            $ticket->setnum_ticket($_POST['cbo_nom']);
            $ticket->setdescrip_ticket($_POST['cbo_detalle']);
            $ticket->setimg_ticket('');
            $ticket->setid_usu($_POST['cbo_usuario']);
            $ticket->setid_tipo($_POST['cbo_tipo']);
            $ticket->setid_piso($_POST['cbo_piso']);

            //llmando al inser de modelo solicitud
            $save = $this->SOLICITUD->insertSolicitud($ticket);
            if ($save) {
                header('Location:Index');
            } else {
                header('Location:Index');
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}

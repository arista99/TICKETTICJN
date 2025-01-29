<?php

include_once('config/conexionMysql.php');

class ModeloDashboard
{

    public $MYSQL;

    public function __construct()
    {
        try {
            $this->MYSQL = new ClassConexion(); //INICIANDO LA CONEXION A LA BD
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    /*******************************************Ticket********************************************/
    public function ticket()
    {
        try {
            $sql = "SELECT  ti.id_ticket,ti.num_ticket, ti.descrip_ticket,ti.descrip_ticket,u.nom_usu,t.nom_tipo,e.nom_esta,p.num_piso,te.nom_tec,a.nom_area
                     FROM ticket AS ti
                    INNER JOIN usuario AS u ON ti.id_usu=u.id_usu
                    INNER JOIN area AS a ON a.id_area=u.id_area
                   INNER JOIN tipo AS t ON ti.id_tipo=t.id_tipo
                   INNER JOIN estado AS e ON ti.id_esta=e.id_esta
                   INNER JOIN piso AS p ON ti.id_piso=p.id_piso
                   LEFT JOIN tecnico AS te ON ti.id_tec=te.id_tec
                   WHERE ti.id_esta = '4'ORDER BY ti.id_ticket ASC";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    /*******************************************Alerta Ticket********************************************/
    // public function listaticket($ultimoTicketId = null)
    // {
    //     try {
    //         $sql = "SELECT ti.id_ticket,ti.num_ticket, ti.descrip_ticket,ti.descrip_ticket,u.nom_usu,t.nom_tipo,e.nom_esta,p.num_piso
    //                 FROM ticket AS ti
    //                 INNER JOIN usuario AS u ON ti.id_usu=u.id_usu
    //                 INNER JOIN tipo AS t ON ti.id_tipo=t.id_tipo
    //                 INNER JOIN estado AS e ON ti.id_esta=e.id_esta
    //                 INNER JOIN piso AS p ON ti.id_piso=p.id_piso
    //                 WHERE e.id_esta = '4'";
    //         // Agregar filtro para registros más recientes
    //         if ($ultimoTicketId !== null) {
    //             $sql .= " AND ti.id_ticket > :ultimoTicketId";
    //         }

    //         $sql .= " ORDER BY ti.id_ticket ASC";

    //         $stm = $this->MYSQL->ConectarBD()->prepare($sql);

    //         if ($ultimoTicketId !== null) {
    //             $stm->bindParam(':ultimoTicketId', $ultimoTicketId, PDO::PARAM_INT);
    //         }

    //         $stm->execute();
    //         return $stm->fetchAll(PDO::FETCH_OBJ);
    //         // $stm = $this->MYSQL->ConectarBD()->prepare($sql);
    //         // $stm->execute();
    //         // return $stm->fetchAll(PDO::FETCH_OBJ);
    //     } catch (Exception $th) {
    //         echo $th->getMessage();
    //     }
    // }

    /*******************************************Actualizar Solicitud********************************************/
    public function updateTicket(Ticket $ticket)
    {
        try {
            $fecha = date('Y-m-d H:i:s');
            $sql = "UPDATE ticket SET id_prio =?, id_cat =?, id_tec=?, id_esta =? ,capture_time=? WHERE id_ticket =?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql)->execute(
                array(
                    $ticket->getid_prio(),
                    $ticket->getid_cat(),
                    $ticket->getid_tec(),
                    $ticket->getid_esta(),
                    $fecha,
                    $ticket->getid_ticket(),
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    /*******************************************Prioridad********************************************/
    public function prioridad()
    {
        try {
            $sql = "SELECT * FROM prioridad";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
    /*******************************************Categoria********************************************/
    public function categoria()
    {
        try {
            $sql = "SELECT * FROM categoria";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
    /*******************************************Tecnico********************************************/
    public function tecnico()
    {
        try {
            $sql = "SELECT * FROM tecnico";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
    /*******************************************Estado********************************************/
    public function estado()
    {
        try {
            $sql = "SELECT * FROM estado";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    /*******************************************Piso********************************************/
    public function piso()
    {
        try {
            $sql = "SELECT * FROM piso";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
    /*******************************************Tipo********************************************/
    public function tipo()
    {
        try {
            $sql = "SELECT * FROM tipo";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    /*--------------------------------------------Filtrar-------------------------------------------*/
    public function filtrarSolicitud($buscador, $piso, $tecnico, $tipo)
    {
        try {
            $sql = "SELECT ti.id_ticket,ti.num_ticket, ti.descrip_ticket,ti.descrip_ticket,u.nom_usu,t.nom_tipo,e.nom_esta,p.num_piso,te.nom_tec
                     FROM ticket AS ti
                    INNER JOIN usuario AS u ON ti.id_usu=u.id_usu
                   INNER JOIN tipo AS t ON ti.id_tipo=t.id_tipo
                   INNER JOIN estado AS e ON ti.id_esta=e.id_esta
                   INNER JOIN piso AS p ON ti.id_piso=p.id_piso
                   LEFT JOIN tecnico AS te ON ti.id_tec=te.id_tec";

            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}

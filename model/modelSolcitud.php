<?php

include_once('config/conexionMysql.php');

class ModeloSolicitud
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
    /*******************************************Area********************************************/
    public function area()
    {
        try {
            $sql = "SELECT * FROM area";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
    /*******************************************Usuario********************************************/
    public function usuario($id_area)
    {
        try {
            $sql = "SELECT * FROM usuario where id_area = ?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(
                array($id_area),
            );
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
    /*******************************************Insertar Solicitud********************************************/
    public function insertSolicitud(Ticket $ticket)
    {
        try {
            $sql = "INSERT INTO ticket (num_ticket,descrip_ticket,img_ticket,id_usu,id_tipo,id_piso) values (?,?,?,?,?,?)";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql)->execute(
                array(
                    $ticket->getnum_ticket(),
                    $ticket->getdescrip_ticket(),
                    $ticket->getimg_ticket(),
                    $ticket->getid_usu(),
                    $ticket->getid_tipo(),
                    $ticket->getid_piso()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }


    public function rowCount()
    {
        try {
            $sql = "SELECT COUNT(*) as numer_ticket FROM ticket;";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
}

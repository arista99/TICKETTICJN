<?php

include_once('config/conexionMysql.php');

class ModeloLogin
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

    /*******************************************LOGEO DEL USUARIO********************************************/
    public function logeo(Tecnico $tecnico)
    {
        try {
            $sql = "SELECT * FROM tecnico WHERE nom_tec=? AND pass_tec=?";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute(array($tecnico->getnom_tec(), $tecnico->getpass_tec()));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
    /*********************************************************************************************************/

}

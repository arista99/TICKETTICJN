<?php

include_once('config/conexionMysql.php');

class ModeloTecnico
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

     /*--------------------------------LISTA DE TECNICO-----------------------------------*/
     public function listaTecnico()
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
    
}

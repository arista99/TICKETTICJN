<?php

include_once('config/conexionMysql.php');

class ModeloArea
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

     /*--------------------------------LISTA DE AREA-----------------------------------*/
     public function ListaArea()
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
    
}

<?php

include_once('config/conexionMysql.php');
include_once('utils/modelMensaje.php');

class ModeloSession
{

    public $PDO;
    public $MYSQL;
    public $MSG;

    public function __construct()
    {
        try {
            $this->MYSQL = new ClassConexion();
            $this->MSG = new ModeloMensaje();
        } catch (Exception $th) {
            throw $th;
        }
    }



    /*****************************************************************LOGEO DEL USUARIO*******************************************************/
    public function isSession()
    {
        try {
            session_start();
            if (empty($_SESSION['CONTROL']) || $_SESSION['CONTROL'] !== 1) {
                $message = "INGRESE SUS CREDENCIALES POR FAVOR!!";
                echo $this->MSG->success($message);
                include_once('view/login.php');
                exit;
            }
        } catch (Exception $th) {
            throw $th;
        }
    }
    /****************************************************************************************************************************************/
}

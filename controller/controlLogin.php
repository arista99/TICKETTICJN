<?php
//MODEL
require_once('model/modelLogin.php');
include_once('utils/modelSession.php');
//MODEL
require_once('data/tecnico.php');

class ControlLogin
{

    //VARIABLKE MODELO
    public $LOGIN;
    public $SESSION;


    public function __construct()
    {
        $this->LOGIN = new ModeloLogin();
        $this->SESSION = new ModeloSession();
    }
    public function LoginUsuario()
    {
            include_once('view/login.php');
    }

    public function Login()
    {
        try {
            // var_dump($_POST);
            $login = new Tecnico();
            $login->setnom_tec($_POST['usuario']);
            $login->setpass_tec($_POST['contrasena']);

            $acceso = $this->LOGIN->logeo($login);
            // var_dump($acceso);
            // exit;
            if ($acceso) {
                session_start();
                $_SESSION["id_tec"] = $acceso->id_tec;
                $_SESSION["nom_tec"] = $acceso->nom_tec;
                $_SESSION["pass_tec"] = $acceso->pass_tec;
                $_SESSION["id_rol"] = $acceso->id_rol;
            
                // Redirigir según el rol
                if($_SESSION["id_rol"] == 1){
                    //Administrador
                    include_once("view/administrador/dashboard/controladministrador.php");
                } elseif ($_SESSION["id_rol"] == 2) {
                    //Soporte
                    include_once("view/soporte/dashboard/controladministrador.php");
                } else{
                    include_once('view/login.php');
                }
            
            }
        
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function Close()
    {
        try {
            session_start();
            $_SESSION['CONTROL'] = 0;
            $_SESSION['CONTROL'] = '';
            include_once('view/login.php');
        } catch (Exception $th) {
            throw $th->getMessage();
        }
    }

}
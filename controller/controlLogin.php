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
            if ($acceso) {
                session_start();
                $_SESSION["id_tec"] = $acceso->id_tec;
                $_SESSION["nom_tec"] = $acceso->nom_tec;
                $_SESSION["id_rol"] = $acceso->id_rol;

                // Definir la URL de redirección según el rol
                $redirectUrl = "";
                if ($_SESSION["id_rol"] == 1) {
                    $redirectUrl = "visorAdministrador"; // Administrador
                } elseif ($_SESSION["id_rol"] == 2) {
                    $redirectUrl = "controlsoporte.php"; // Soporte
                } else {
                    $redirectUrl = "view/login.php"; // Usuario general
                }

                // Devolver respuesta JSON para AJAX
                echo json_encode([
                    "status" => "success",
                    "redirect" => $redirectUrl
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "Credenciales incorrectas"
                ]);
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    public function Close()
    {
        try {
            // Iniciar sesión
            session_start();

            // Destruir todas las variables de sesión
            $_SESSION = [];

            // Destruir la sesión
            session_destroy();


            // Eliminar la cookie de sesión si se usa
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
            }

            // Redirigir al usuario a la página de login
            header("Location: LoginUsuario");
            exit;
        } catch (Exception $th) {
            throw $th->getMessage();
        }
    }
}

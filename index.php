<?php
include_once('controller/controlIndex.php');
include_once('controller/controlDashboard.php');
include_once('controller/controlLogin.php');
include_once('controller/controlUsuario.php');

//PARA LOS CARACTERES EXTRAÑOS
header('Content-Type: text/html; charset=utf-8');

//ZONA DE HORARIO
date_default_timezone_set("America/Lima");

//VARIABLES CONTROLADORES
$controlIndex = new ControlIndex();
$controlDashboard = new ControlDashboard();
$controlLogin = new ControlLogin();
$controlUsuario = new ControlUsuario();


//LLAMADA DE LOS METODOS
if (!isset($_REQUEST['ruta'])) {
    $controlIndex->Index();
} else {
    $peticion = $_REQUEST['ruta'];
    if (method_exists($controlIndex, $peticion)) {
        call_user_func(array($controlIndex, $peticion));
    }elseif (method_exists($controlDashboard, $peticion)) {
        call_user_func(array($controlDashboard, $peticion));
    }elseif (method_exists($controlLogin, $peticion)) {
        call_user_func(array($controlLogin, $peticion));
    }elseif (method_exists($controlUsuario, $peticion)) {
        call_user_func(array($controlUsuario, $peticion));
    }else{
        $controlIndex->Index();
    }
}



<?php
//MODEL
require_once('model/modelUsuario.php');

//MODEL
require_once('data/usuario.php');

class ControlUsuario
{
    //VARIABLKE MODELO
    public $USUARIO;

    public function __construct()
    {
        $this->USUARIO = new ModeloUsuario();
    }
    public function registroUsuario()
    {
        $area = $this->USUARIO->listaArea();
        include_once('view/administrador/usuarios/registrarusuarios.php');
    }
}
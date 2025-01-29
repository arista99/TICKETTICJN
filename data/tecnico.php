<?php

class Tecnico
{

    private $id_tec;
    private $nom_tec;
    private $pass_tec;
    private $id_rol;

    public function __construct()
    {
        $this->id_tec = "";
        $this->nom_tec = "";
        $this->pass_tec = "";
        $this->id_rol = "";
    }

    function setid_tec($id_tec)
    {
        $this->id_tec = $id_tec;
    }

    function getid_tec()
    {
        return $this->id_tec;
    }

    function setnom_tec($nom_tec)
    {
        $this->nom_tec = $nom_tec;
    }

    function getnom_tec()
    {
        return $this->nom_tec;
    }

    function setpass_tec($pass_tec)
    {
        $this->pass_tec = $pass_tec;
    }

    function getpass_tec()
    {
        return $this->pass_tec;
    }

    function setid_rol($id_rol)
    {
        $this->id_rol = $id_rol;
    }

    function getemail_usu()
    {
        return $this->id_rol;
    }
}

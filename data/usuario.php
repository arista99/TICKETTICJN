<?php

class Usuario
{

    private $id_usu;
    private $id_area;
    private $nom_usu;
    private $email_usu;

    public function __construct()
    {
        $this->id_usu = "";
        $this->id_area = "";
        $this->nom_usu = "";
        $this->email_usu = "";
    }

    function setid_usu($id_usu)
    {
        $this->id_usu = $id_usu;
    }

    function getid_usu()
    {
        return $this->id_usu;
    }

    function setid_area($id_area)
    {
        $this->id_area = $id_area;
    }

    function getid_area()
    {
        return $this->id_area;
    }

    function setnom_usu($nom_usu)
    {
        $this->nom_usu = $nom_usu;
    }

    function getnom_usu()
    {
        return $this->nom_usu;
    }

    function setemail_usu($email_usu)
    {
        $this->email_usu = $email_usu;
    }

    function getemail_usu()
    {
        return $this->email_usu;
    }
}

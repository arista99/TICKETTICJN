<?php

class Ticket
{

    private $id_ticket;
    private $num_ticket;
    private $descrip_ticket;
    private $img_ticket;
    private $id_usu;
    private $id_tipo;
    private $id_prio;
    private $id_cat;
    private $id_esta;
    private $id_tec;
    private $id_piso;

    public function __construct()
    {
        $this->id_ticket = "";
        $this->num_ticket = "";
        $this->descrip_ticket = "";
        $this->img_ticket = "";
        $this->id_usu = "";
        $this->id_tipo = "";
        $this->id_prio = "";
        $this->id_cat = "";
        $this->id_tec = "";
        $this->id_piso = "";
    }

    function setid_ticket($id_ticket)
    {
        $this->id_ticket = $id_ticket;
    }

    function getid_ticket()
    {
        return $this->id_ticket;
    }

    function setnum_ticket($num_ticket)
    {
        $this->num_ticket = $num_ticket;
    }

    function getnum_ticket()
    {
        return $this->num_ticket;
    }

    function setdescrip_ticket($descrip_ticket)
    {
        $this->descrip_ticket = $descrip_ticket;
    }

    function getdescrip_ticket()
    {
        return $this->descrip_ticket;
    }

    function setimg_ticket($img_ticket)
    {
        $this->img_ticket = $img_ticket;
    }

    function getimg_ticket()
    {
        return $this->img_ticket;
    }

    function setid_usu($id_usu)
    {
        $this->id_usu = $id_usu;
    }

    function getid_usu()
    {
        return $this->id_usu;
    }

    function setid_tipo($id_tipo)
    {
        $this->id_tipo = $id_tipo;
    }

    function getid_tipo()
    {
        return $this->id_tipo;
    }

    function setid_prio($id_prio)
    {
        $this->id_prio = $id_prio;
    }

    function getid_prio()
    {
        return $this->id_prio;
    }

    function setid_cat($id_cat)
    {
        $this->id_cat = $id_cat;
    }

    function getid_cat()
    {
        return $this->id_cat;
    }

    function setid_esta($id_esta)
    {
        $this->id_esta = $id_esta;
    }

    function getid_esta()
    {
        return $this->id_esta;
    }

    function setid_tec($id_tec)
    {
        $this->id_tec = $id_tec;
    }

    function getid_tec()
    {
        return $this->id_tec;
    }

    function setid_piso($id_piso)
    {
        $this->id_piso = $id_piso;
    }

    function getid_piso()
    {
        return $this->id_piso;
    }

}

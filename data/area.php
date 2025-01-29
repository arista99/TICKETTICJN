<?php

class Area
{

    private $id_area;
    private $nom_area;

    public function __construct()
    {
        $this->id_area = "";
        $this->nom_area = "";
    }

    function setid_area($id_area)
    {
        $this->id_area = $id_area;
    }

    function getid_area()
    {
        return $this->id_area;
    }

    function setnom_area($nom_area)
    {
        $this->nom_area = $nom_area;
    }

    function getnom_area()
    {
        return $this->nom_area;
    }

}

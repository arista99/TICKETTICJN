<?php

include_once('config/conexionMysql.php');

class ModeloUsuario
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

    /*--------------------------------LISTA DE USUARIO-----------------------------------*/
    public function listaUsuario()
    {
        try {
            $sql = "SELECT * FROM usuario";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    /*--------------------------------REGISTRAR USUARIO-----------------------------------*/
    public function registrarUsuario(Usuario $usuario)
    {
        try {
            $sql = "INSERT INTO usuario(id_area,nom_usu,email_usu) VALUES (?,?,?)";
            $stm = $this->MYSQL->ConectarBD()->prepare($sql)->execute(
                array(
                    $usuario->getid_area(),
                    $usuario->getnom_usu(),
                    $usuario->getemail_usu()
                )
            );
            return $stm;
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }

    /*--------------------------------LISTA DE AREA-----------------------------------*/
    public function listaArea()
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
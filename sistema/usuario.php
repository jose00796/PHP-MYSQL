<?php
require_once "autoload.php";
class usuario extends conexion
{
    private $nombre;
    private $telef;
    private $email;
    private $conection;

    public function __construct()
    {
        $this->conection = new conexion();
    }

    public function InsertarUsuario($nombre, $telef, $email)
    {
        $this->nombre = $nombre;
        $this->telef = $telef;
        $this->email = $email;

        $sql = "INSERT INTO usuario (nombre, telefono, email) VALUE ($this->nombre, $this->telef, $this->email)";
    }
}

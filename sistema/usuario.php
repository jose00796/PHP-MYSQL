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
        $this->conection = $this->conection->connect();
    }

    public function InsertarUsuario($nombre, $telef, $email)
    {
        $this->nombre = $nombre;
        $this->telef = $telef;
        $this->email = $email;

        $sql = "INSERT INTO usuario (nombre, telefono, email) VALUE (?,?,?)";
        $insert = $this->conection->prepare($sql);
        $arrayData = array($this->nombre, $this->telef, $this->email);
        $resInsert = $insert->execute($arrayData);
        $idInsert = $this->conection->lastInsertid();
        return $idInsert;
    }

    public function getUsuarios()
    {
        $sql = "SELECT * FROM usuario";
        $execute = $this->conection->query($sql);
        $request = $execute->fetchall(PDO::FETCH_ASSOC);
        return $request;
    }
}

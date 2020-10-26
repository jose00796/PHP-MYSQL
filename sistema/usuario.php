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
        $request = $execute->fetchall(PDO::FETCH_ASSOC);//Fetchall->Permite traer mas de un registro.
        return $request;
    }

    public function updateUsuario($id ,$nombre, $telef, $email)
    {
        $this->nombre = $nombre;
        $this->telef = $telef;
        $this->email = $email;

        $sql = "UPDATE usuario SET nombre = ?, telefono = ?, email = ? WHERE id = $id";
        $update = $this->conection->prepare($sql);
        $arrayUpdate = arraY($this->nombre, $this->telef, $this->email);
        $resExecute = $update->execute($arrayUpdate);
        return $resExecute;
    }

    public function GetUser($id)
    {
        $sql = "SELECT * FROM usuario WHERE id = ?";
        $arrayWhere = array($id);
        $query = $this->conection->prepare($sql);
        $query->execute($arrayWhere);
        $request = $query->fetch(PDO::FETCH_ASSOC);//Fetch->Permite obtener un solo registro en especifico.
        return $request;
    }

    public function DelUser($id)
    {
        $sql = "DELETE FROM usuario WHERE id = ?";
        $delete = $this->conection->prepare($sql);
        $arrayWhere = array($id);
        $del = $delete->execute($arrayWhere);
        return $del;
    }
}

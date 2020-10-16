<?php

class conexion
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "db_sistema";
    private $connect;

    public function __construct()
    {
        $conectionstring = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";

        try {
            $this->connect = new PDO($conectionstring, $this->user, $this->pass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            $this->connect = "ERROR DE CONEXION";
            echo "Error = ".$e->getMessage();
        }
    }
}

$connect = new conexion();

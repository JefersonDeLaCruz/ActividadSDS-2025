<?php

namespace lib;
use PDO;

class Database
{
    public $host = "db";
    public $dbname = "usuarios";
    public $username = "root";
    public $password = "rootpass";

    public $conn;

    //metodo publico para obtener la conexion, nombre usado por modelos
    public function getConnetion()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\Throwable $th) {
            //mostrar error simple para depuracion
            echo $th;
        }
        return $this->conn;
    }
}

?>
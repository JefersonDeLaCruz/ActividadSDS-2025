<?php
namespace lib;
use PDO;
use PDOException;



class Database
{
    private $host = "db";
    private $db_name = "mvc";
    private $username = "root";
    private $password = "rootpass";

    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>
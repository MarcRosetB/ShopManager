<?php
include "../config.php";

class Connection
{
    private $host;
    private $dbName;
    private $dbUser;
    private $dbPwd;
    public $conn;

    public function __construct()
    {
        $config = getConfig();
        $this->host = $config["dbHost"];
        $this->dbName = $config["dbName"];
        $this->dbUser = $config["dbUser"];
        $this->dbPwd = $config["dbPwd"];
    }

    private function startConnection()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8",
                $this->dbUser,
                $this->dbPwd,
            );
            $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION,
            );

            return $this->conn;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function closeConnection()
    {
        $this->conn = null;
    }
}

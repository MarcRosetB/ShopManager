<?php
include_once "Connection.php";

class Department
{
    public $connect;

    public function __construct()
    {
        $conn = new Connection();
        $this->connect = $conn->startConnection();
    }

    public function getAllDepartments(): array
    {
        $query = "SELECT * FROM Departments";
        $stmt = $this->connect->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

<?php
include_once "Connection.php";

class Employee
{
    private $employeeName;
    private $employeePhone;
    private $employeeEmail;
    private $employeePwd;
    private $employeeShop;
    private $employeeDepartment;

    public function __construct(
        string $name,
        int $phone,
        string $email,
        string $pwd,
        string $shop,
        string $department,
    ) {
        $this->employeeName = $name;
        $this->employeePhone = $phone;
        $this->employeeEmail = $email;
        $this->employeePwd = $pwd;
        $this->employeeShop = $shop;
        $this->employeeDepartment = $department;
    }

    public function getAllEmployees(): array
    {
        try {
            $connection = new Connection();
            $conn = $connection->startConnection();

            $sql = "SELECT * FROM Employee";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error de consulta: " . $e->getMessage());
        } finally {
            $connection->closeConnection();
        }
    }
}

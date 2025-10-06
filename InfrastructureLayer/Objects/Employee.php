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
}

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
}

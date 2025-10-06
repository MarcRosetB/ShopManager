<?php
include "../config.php";

class Connection
{
    private $host;
    private $dbName;
    private $dbUser;
    private $dbPwd;
    public $conn;
    
    public function __construct(){
        $config = getConfig();
        $host = $config['dbHost'];
        $dbName = $config['dbName'];
        $dbUser = $config['dbUser'];
        $dbPwd = $config['dbPwd'];
    }
    
    
}

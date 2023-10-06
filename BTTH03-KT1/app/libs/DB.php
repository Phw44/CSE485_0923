<?php

class DBConnection
{
    private $hostName;
    private $userName;
    private $passName;
    private $dbName;
    private $conn;

    public function __construct()
    {
        $this->hostName = hostDb;
        $this->userName = userName;
        $this->passName = passDb;
        $this->dbName = nameDb;
        try {
            $this->conn = new PDO("mysql:hostName=localhost;dbName=quanlythuvien;charset=utf8", 'root', '442003');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->conn = null;
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
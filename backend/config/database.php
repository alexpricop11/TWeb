<?php

class Database
{
    private $host = 'localhost';
    private $dbname = 'tweb_db';
    private $username = 'postgres';
    private $password = '1234';
    private $port = '5432';
    private $conn;

    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "pgsql:host=$this->host;port=$this->port;dbname=$this->dbname",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
            return null;
        }
        return $this->conn;
    }
}

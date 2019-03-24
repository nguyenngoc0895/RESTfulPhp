<?php
class Database
{
    //DB params
    private $host = 'localhost';
    private $dbName = 'restfulphp';
    private $username = 'root';
    private $password = '';
    private $conn;

    //DB connect
    public function connect(){
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e) {
            echo 'Connect Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}


?>
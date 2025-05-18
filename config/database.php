<?php
class Database {
    private $host = "localhost";
    private $db_name = "taskmanager";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,
                                  $this->username, $this->password);
        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
        return $this->conn;
    }
}

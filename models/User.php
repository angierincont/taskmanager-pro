<?php
require_once '../config/database.php';

class User {
    private $conn;
    private $table = "users";

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function findByEmail($email){
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE email=?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

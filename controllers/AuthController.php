<?php
require_once '../models/User.php';

class AuthController {
    private $userModel;

    public function __construct(){
        $this->userModel = new User();
        session_start();
    }

    public function login($email, $password){
        $user = $this->userModel->findByEmail($email);
        if($user && password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            header("Location: ../public/dashboard.php");
            exit;
        } else {
            return "Credenciales inválidas";
        }
    }
}

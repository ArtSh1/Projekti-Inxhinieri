<?php
require 'variables.php';
include_once 'adminClass.php';

session_start();

if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if(isset($_POST['register-btn'])){
    $register = new RegisterLogic($_POST);
    $register->registerUser();
}else {
    header("Location:../index.html");
}

class LoginLogic
{    
}

class RegisterLogic{
    private $username = "";
    private $password = "";
    private $lastname = "";

    public function __construct($formData)
    {
        $this->username = $formData['register-username'];
        $this->password = $formData['register-password'];
        $this->password = $formData['register-lastname'];
    }
}

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            header("Location:../views/index.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password) != null) {
            header('Location:../views/home.php');
        } else
            header("Location:../views/index.php");
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $mapper->getUserByUserName($username);
        
        if($user==null) return false;
        
        if(password_verify($password,$user['password']))
            return true;
        return false
    }
}

class RegisterLogic
{
    public function __construct()
    {
    }

    public function registerUser()
    {
    }
}
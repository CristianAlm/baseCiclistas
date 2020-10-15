<?php

require_once "./View/loginView.php";
require_once "./Model/loginModel.php";

class loginController{

    private $loginView;
    private $loginModel;

    function __construct(){
        
        $this->loginView = new loginView();
        $this->loginModel = new loginModel();

    }

    function loginHome(){
        $this->loginView->showLogin();
        //$administradores = $this->loginModel->getAdministradores();
        //var_dump($administradores);
        
    }

    function verifyUser(){
        $user = $_POST['nombre-admin'];
        $pass = $_POST['pass-admin'];

        echo 'el user es: ' . $user;
        echo ' y la contraseña es: ' . $pass;


        
    }
}

?>
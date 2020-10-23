<?php

    //require que tengo que cambiar
    
    require_once 'Controller/ciclistasController.php';
    require_once 'Controller/loginController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    


    $r = new Router();

    //login

    $r->addRoute("irLogeo", "GET", "loginController", "ShowLogin");
    $r->addRoute("verifyUser", "POST", "loginController", "VerifyUser");

    // rutas
    $r->addRoute("login", "GET", "ciclistasController", "Home");
    $r->addRoute("paraLogin", "GET", "ciclistasController", "manipularTabla");

    $r->addRoute("insert", "POST", "ciclistasController", "insertarCiclista");
    $r->addRoute("insertEquipo", "POST", "ciclistasController", "insertarEquipo");

    $r->addRoute("borrar/:ID", "GET", "ciclistasController", "deleteCiclista");
    $r->addRoute("borrarEquipo/:ID", "GET", "ciclistasController", "deleteEquipo");
    
    $r->addRoute("editar/:ID", "GET", "ciclistasController", "editBase");
    $r->addRoute("paraEditar/:ID", "POST", "ciclistasController", "paraEditarCiclista");

    $r->addRoute("editarEquipo/:ID", "GET", "ciclistasController", "editBaseEquipo");
    $r->addRoute("paraEditarEquipo/:ID", "POST", "ciclistasController", "EditarEquipo");


    //Ruta por defecto.
    $r->setDefaultRoute("ciclistasController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
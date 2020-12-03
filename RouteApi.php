<?php

    require_once 'RouterClass.php';
    require_once 'api/ApiCiclistasController.php';

    $router = new Router();

    $router->addRoute('ciclistas', 'GET', 'ApiCiclistasController', 'getCiclistas');
    $router->addRoute('ciclistas/:ID', 'GET', 'ApiCiclistasController', 'getCiclista');

   //run
   $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
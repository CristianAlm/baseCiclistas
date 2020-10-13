<?php

//Mirar <base href="{BASE_URL}"> para redirigir

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


//require_once "ciclistas.php";
//require_once "insertarCiclistas.php";
//require_once "editar.php";

require_once "Controller/ciclistasController.php";

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$controller = new ciclistasController();

switch ($params[0]) {
    case 'home':
        $controller->Home(); 
        //listarCiclistas();
        //listarEquipos();
        break;
    case '':
        $controller->Home(); 
        //listarCiclistas();
        //listarEquipos();
        break;
    case 'insert':
        echo "el router anda";
        $controller->insertarEquipo(); 
        $controller->insertarCiclista();
        break;
    case 'borrar':
        $controller->deleteCiclista($params[1]);
        break;
    case 'paraEditar':
        $id = $params[1];
        $controller->editCiclista();
        break;
    
    case 'editar':
        //$id = $params[1];
        $controller->editBase($params[1]);
        //$ciclista = getCiclistaparaeditar($id);
        //editora($params[1],$ciclista->corredor,$ciclista->id_equipo,$ciclista->edad,$ciclista->especialidad);
        break;
    /*    
    case 'insertar': 
        formularioCiclistas();
        break;

        */
    
    default: 
        echo('404 Page not found'); 
        break;
}

?>

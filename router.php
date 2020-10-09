<?php

//Mirar <base href="{BASE_URL}"> para redirigir

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


require_once "ciclistas.php";
require_once "insertarCiclistas.php";
require_once "editar.php";

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home': 
        listarCiclistas();
        break;
    case 'insertar': 
        formularioCiclistas();
        break;
    case 'insert':
        echo "el router anda"; 
        insertarCiclista();
        break;
    case 'borrar':
        deleteCiclista($params[1]);
        break;
    case 'paraEditar':
        $id = $params[1];
        editCiclista($id, $_POST['corredor'], $_POST['equipo'], $_POST['division'], $_POST['especialidad'], $_POST['edad'] );
        break;
    
    case 'editar':
        $id = $params[1];
        $ciclista = getCiclistaparaeditar($id);

        editora($params[1],$ciclista->corredor,$ciclista->equipo,$ciclista->division,$ciclista->especialidad,$ciclista->edad);
        break;
    
    default: 
        echo('404 Page not found'); 
        break;
}

?>

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
    /*    
    case 'insertar': 
        formularioCiclistas();
        break;
    case 'insert':
        echo "el router anda";
        insertarEquipo(); 
        insertarCiclista();
        break;
    case 'borrar':
        deleteCiclista($params[1]);
        break;
    case 'paraEditar':
        $id = $params[1];
        editCiclista($id, $_POST['corredor'], $_POST['equipo'], $_POST['edad'], $_POST['especialidad']);
        break;
    
    case 'editar':
        $id = $params[1];
        //$id_equipo = $params[2];
        $ciclista = getCiclistaparaeditar($id);
        //$equipo = geEquipoparaeditar($id);

        editora($params[1],$ciclista->corredor,$ciclista->id_equipo,$ciclista->edad,$ciclista->especialidad);
        break;

        */
    
    default: 
        echo('404 Page not found'); 
        break;
}

?>

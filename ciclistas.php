<?php

function getCiclistaparaeditar($id){
    $db = new PDO('mysql:host=localhost;'
      .'dbname=db-ciclista;charset=utf8'
      , 'root', '');


    $query = $db->prepare('SELECT * FROM corredor WHERE id=' . $id);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if (sizeof($results) > 0)   return $results[0];
    else return null;
}

function geEquipoparaeditar($id_equipo){
    $db = new PDO('mysql:host=localhost;'
      .'dbname=db-ciclista;charset=utf8'
      , 'root', '');


    $query = $db->prepare('SELECT * FROM equipo WHERE id=' . $id);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if (sizeof($results) > 0)   return $results[0];
    else return null;
}

function listarCiclistas(){
    function getCiclistas(){
        $db = new PDO('mysql:host=localhost;'
    .'dbname=db-ciclista;charset=utf8'
    , 'root', '');

    $query = $db->prepare('SELECT * FROM corredor');
    $query->execute();

    $ciclistas = $query->fetchAll(PDO::FETCH_OBJ);

    return $ciclistas;

    }

    $ciclistas = getCiclistas();

    echo '<table>';
    echo '<tr>';
    echo '<td>Corredor</td>';
    echo '<td>Equipo</td>';
    //echo '<td>Division</td>';
    echo '<td>Edad</td>';
    echo '<td>Especialidad</td>';
    echo '<td>Borrar</td>';
    echo '<td>Editar</td>';
    echo '</tr>';

    foreach($ciclistas as $ciclista){
        $ciclista->id;
        //echo "<li> $ciclista->corredor del equipo: $ciclista->id . <button><a href=borrar/'.$ciclistas->id.'>Borrar</a></button>  </li>";
        //echo '<td class=list-group-item >'. $ciclista->corredor . ' del equipo: ' . $ciclista->equipo . ' <button type="button" class="btn btn-outline-danger"><a href="borrar/'.$ciclista->id.'">Borrar</a></button><button type="button" class="btn btn-outline-danger"><a href="editar/'.$ciclista->id.'">Editar</a></button></td>';
        echo "<tr>";
        echo '<td>'. $ciclista->corredor.'</td>';
        echo '<td>'.$ciclista->id_equipo.'</td>';
        //echo '<td>'.$ciclista->division.'</td>';
        echo '<td>'.$ciclista->edad.'</td>';
        echo '<td>'.$ciclista->especialidad.'</td>';
        echo '<td><button type="button" class="btn btn-outline-danger"><a href="borrar/'.$ciclista->id.'">Borrar</a></button></td>';
        echo '<td><button type="button" class="btn btn-outline-danger"><a href="editar/'.$ciclista->id .'">Editar</a></button></td>';
        echo "</tr>";
    }
    echo "</table>";
    
}

function listarEquipos(){
    
    function getEquipos(){
        $db = new PDO('mysql:host=localhost;'
    .'dbname=db-ciclista;charset=utf8'
    , 'root', '');

    $query = $db->prepare('SELECT * FROM equipo');
    $query->execute();

    $equipos = $query->fetchAll(PDO::FETCH_OBJ);

    return $equipos;

    }

    $equipos = getEquipos();

    echo '<table>';
    echo '<tr>';
    echo '<td>Equipo</td>';
    echo '<td>Division</td>';
    echo '<td>Pais</td>';
    echo '<td>Corredores</td>';
    echo '</tr>';

    foreach($equipos as $equipo){
        $equipo->id_equipo;
        echo "<tr>";
        echo '<td>'. $equipo->id_equipo.'</td>';
        echo '<td>'.$equipo->division.'</td>';
        echo '<td>'.$equipo->pais.'</td>';
        echo '<td><button type="button" class="btn btn-outline-danger"><a href="mostrarCorredores/'.$equipo->id_equipo.'">Corredores</a></button></td>';
        echo "</tr>";
    }
    echo "</table>";
}

function insertarCiclista(){
    $db = new PDO('mysql:host=localhost;'
    .'dbname=db-ciclista;charset=utf8'
    , 'root', '');

    $query = $db->prepare('INSERT INTO corredor(corredor, id_equipo, edad, especialidad) VALUES(?,?,?,?)');
    
    $query->execute(array($_POST['input_corredor'],$_POST['input_equipo'],$_POST['input_edad'],$_POST['input_especialidad']));

    header("Location: ".BASE_URL."home");
}
function insertarEquipo(){
    $db = new PDO('mysql:host=localhost;'
    .'dbname=db-ciclista;charset=utf8'
    , 'root', '');

    $query = $db->prepare('INSERT INTO equipo(id_equipo, division, pais) VALUES(?,?,?)');
    
    $query->execute(array($_POST['input_equipo'],$_POST['input_division'],$_POST['input_pais']));

    header("Location: ".BASE_URL."home");
}


function deleteCiclista($ciclistas_id){
    $db = new PDO('mysql:host=localhost;'
    .'dbname=db-ciclista;charset=utf8'
    , 'root', '');

    $query = $db->prepare('DELETE FROM corredor WHERE id=?');
    $query->execute(array($ciclistas_id));

    header("Location: ".BASE_URL."home");
}

function editCiclista($ciclistas_id, $newcorredor, $newequipo,  $newedad, $newespecialidad){
    $db = new PDO('mysql:host=localhost;'
    .'dbname=db-ciclista;charset=utf8'
    , 'root', '');

    $query = $db->prepare("UPDATE corredor SET corredor=?, id_equipo=?, edad=?, especialidad=?  WHERE id=?");
    $results = $query->execute(array($newcorredor, $newequipo,  $newedad, $newespecialidad , $ciclistas_id));

    header("Location: ".BASE_URL."home");
}

?>

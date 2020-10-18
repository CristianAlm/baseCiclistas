<?php

    class ciclistasModel{

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
        
        function getEquipoparaeditar($id_equipo){//Mirar si tengo que modificar el id y el id del prepare
            $db = new PDO('mysql:host=localhost;'
              .'dbname=db-ciclista;charset=utf8'
              , 'root', '');
        
        
            $query = $db->prepare('SELECT * FROM equipo WHERE id=' . $id_equipo);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            if (sizeof($results) > 0)   return $results[0];
            else return null;
        }
        
        function listarCiclistas(){//Voy a tener que modificar aca si modifico la base de datos
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
            
            echo '<center>';
            echo '<h3>Lista de ciclistas</h3>';
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
            echo '</center>';
            
        }

        function listarCiclistassinAcceso(){//Voy a tener que modificar aca si toco la base de datos
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
            
            echo '<center>';
            echo '<h2>Corredores inscriptos</h2>';
            echo '<table>';
            echo '<tr>';
            echo '<td>Corredor</td>';
            echo '<td>Equipo</td>';
            //echo '<td>Division</td>';
            echo '<td>Edad</td>';
            echo '<td>Especialidad</td>';
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
                echo "</tr>";
            }
            echo "</table>";
            echo '</center>';
            
        }
        
        function listarEquipos(){//Voy a tener que modificar aca si toco la base de datos
            
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
            
            echo '<center>';
            echo '<h3>Lista de equipos</h3>';
            echo '<table>';
            echo '<tr>';
            echo '<td>ID Equipo</td>';
            echo '<td>Equipo</td>';
            echo '<td>Division</td>';
            echo '<td>Corredores</td>';
            echo '<td>Editar</td>';
            echo '<td>Borrar</td>';
            echo '</tr>';
        
            foreach($equipos as $equipo){
                $equipo->id_equipo;
                echo "<tr>";
                echo '<td>'. $equipo->id_equipo.'</td>';
                echo '<td>'.$equipo->equipo.'</td>';
                echo '<td>'.$equipo->division.'</td>';
                echo '<td><button type="button" class="btn btn-outline-danger"><a href="mostrarCorredores/'.$equipo->id_equipo.'">Corredores</a></button></td>';
                echo '<td><button type="button" class="btn btn-outline-danger"><a href="editarEquipo/'.$equipo->id_equipo.'">Editar Equipo</a></button></td>';
                echo '<td><button type="button" class="btn btn-outline-danger"><a href="borrarEquipo/'.$equipo->id_equipo.'">Borrar Equipo</a></button></td>';
                echo "</tr>";
            }
            echo "</table>";
            echo '</center>';
        }

        function listarEquipossinAcceso(){//Voy a tener que modificar aca si toco la base de datos
            
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
            
            echo '<center>';
            echo '<h2>Equipos inscriptos</h2>';
            echo '<table>';
            echo '<tr>';
            echo '<td>ID Equipo</td>';
            echo '<td>Equipo</td>';
            echo '<td>Division</td>';
            echo '<td>Corredores</td>';
            echo '</tr>';
        
            foreach($equipos as $equipo){
                $equipo->id_equipo;
                echo "<tr>";
                echo '<td>'. $equipo->id_equipo.'</td>';
                echo '<td>'.$equipo->equipo.'</td>';
                echo '<td>'.$equipo->division.'</td>';
                echo '<td><button type="button" class="btn btn-outline-danger"><a href="mostrarCorredores/'.$equipo->id_equipo.'">Corredores</a></button></td>';
                echo "</tr>";
            }
            echo "</table>";
            echo "</center>";
        }
        
        function insertarCiclista($corredor, $id_equipo,$edad,$especialidad){//Voy a tener que modificar aca si toco la base de datos
            $db = new PDO('mysql:host=localhost;'
            .'dbname=db-ciclista;charset=utf8'
            , 'root', '');
        
            $query = $db->prepare('INSERT INTO corredor(corredor, id_equipo, edad, especialidad) VALUES(?,?,?,?)');
            $query->execute(array($corredor, $id_equipo,$edad,$especialidad));
        }
        function insertarEquipo($id_equipo,$equipo,$division){//Voy a tener que modificar aca si toco la base de datos
            $db = new PDO('mysql:host=localhost;'
            .'dbname=db-ciclista;charset=utf8'
            , 'root', '');
        
            $query = $db->prepare('INSERT INTO equipo(id_equipo, equipo, division) VALUES(?,?,?)');
            
            $query->execute(array($id_equipo, $equipo ,$division));
        
            //header("Location: ".BASE_URL."home");
        }
        
        
        function deleteCiclista($ciclistas_id){
            $db = new PDO('mysql:host=localhost;'
            .'dbname=db-ciclista;charset=utf8'
            , 'root', '');
        
            $query = $db->prepare('DELETE FROM corredor WHERE id=?');
            $query->execute(array($ciclistas_id));
        
            //header("Location: ".BASE_URL."home");
        }

        function deleteEquipo($equipo_id){
            $db = new PDO('mysql:host=localhost;'
            .'dbname=db-ciclista;charset=utf8'
            , 'root', '');
        
            $query = $db->prepare('DELETE FROM equipo WHERE id_equipo=?');
            $query->execute(array($equipo_id));
        
            //header("Location: ".BASE_URL."home");
        }
        
        function editCiclista($newcorredor, $newequipo,  $newedad, $newespecialidad, $id){

            echo " variable id en el model es: " . $id;
            echo " variable newcorredor es: " . $newcorredor;
            $db = new PDO('mysql:host=localhost;'
            .'dbname=db-ciclista;charset=utf8'
            , 'root', '');

            //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        
            $query = $db->prepare("UPDATE corredor SET corredor=?, id_equipo=?, edad=?, especialidad=?  WHERE id=?");
            $results = $query->execute(array($newcorredor, $newequipo,  $newedad, $newespecialidad, $id));
            //echo "este es el echo: " . $query->rowCount();
            echo " El id despues de esecute es: " .  $id;
            //header("Location: ".BASE_URL."home");
        }
        

    }

?>
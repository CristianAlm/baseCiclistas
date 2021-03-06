<?php

    class ciclistasModel{

        private $db;
        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db-ciclista;charset=utf8'
            , 'root', '');
        }

        function getCiclistaparaeditar($id){
        
            $query = $this->db->prepare('SELECT * FROM corredor WHERE id=' . $id);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            if (sizeof($results) > 0)   return $results[0];
            else return null;
        }

        function getCiclista($id){
        
            $query = $this->db->prepare('SELECT * FROM corredor WHERE id=' . $id);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            if (sizeof($results) > 0)   return $results[0];
            else return null;
        }

        function getCiclistas(){
    
        $query = $this->db->prepare('SELECT * FROM corredor');
        $query->execute();
    
        $ciclistas = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $ciclistas;
    
        }
        
        function getEquipoparaeditar($id_equipo){//Mirar si tengo que modificar el id y el id del prepare
        
            $query = $this->db->prepare('SELECT * FROM equipo WHERE id_equipo=' . $id_equipo);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            if (sizeof($results) > 0)   return $results[0];
            else return null;
        }
        
        function listarCiclistas(){//Voy a tener que modificar aca si modifico la base de datos
            
            $query = $this->db->prepare('SELECT * FROM corredor');

            function getCiclistas($query){
        
            $query->execute();
        
            $ciclistas = $query->fetchAll(PDO::FETCH_OBJ);
        
            return $ciclistas;
        
            }
        
            $ciclistas = getCiclistas($query);
            
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
            echo '<td>Comntarios</td>';
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
                echo '<td><button type="button" class="btn btn-outline-danger"><a href="comentarioCorredor/'.$ciclista->id.'">Comentarios</a></button></td>';
                echo "</tr>";
            }
            echo "</table>";
            echo '</center>';
            
        }

        function listarCiclistassinAcceso(){//Voy a tener que modificar aca si toco la base de datos

            $query = $this->db->prepare('SELECT * FROM corredor');

            function getCiclistas($query){
        
            $query->execute();
        
            $ciclistas = $query->fetchAll(PDO::FETCH_OBJ);
        
            return $ciclistas;
        
            }
        
            $ciclistas = getCiclistas($query);
            
            echo '<center>';
            echo '<h2>Corredores inscriptos</h2>';
            echo '<table>';
            echo '<tr>';
            echo '<td>Corredor</td>';
            echo '<td>Equipo</td>';
            //echo '<td>Division</td>';
            echo '<td>Edad</td>';
            echo '<td>Especialidad</td>';
            echo '<td>Comentarios</td>';
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
                echo '<td><button type="button" class="btn btn-outline-danger"><a href="comentarioCorredor/'.$ciclista->id.'">Comentarios</a></button></td>';
                echo "</tr>";
            }
            echo "</table>";
            echo '</center>';
            
        }
        
        function listarEquipos(){//Voy a tener que modificar aca si toco la base de datos
            
            $query = $this->db->prepare('SELECT * FROM equipo');

            function getEquipos($query){
        
            $query->execute();
        
            $equipos = $query->fetchAll(PDO::FETCH_OBJ);
        
            return $equipos;
        
            }
        
            $equipos = getEquipos($query);
            
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

            $query = $this->db->prepare('SELECT * FROM equipo');
            
            function getEquipos($query){
        
            $query->execute();
        
            $equipos = $query->fetchAll(PDO::FETCH_OBJ);
        
            return $equipos;
        
            }
        
            $equipos = getEquipos($query);
            
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
        
            $query = $this->db->prepare('INSERT INTO corredor(corredor, id_equipo, edad, especialidad) VALUES(?,?,?,?)');
            $query->execute(array($corredor, $id_equipo,$edad,$especialidad));
        }
        function insertarEquipo($id_equipo,$equipo,$division){//Voy a tener que modificar aca si toco la base de datos
            
            $query = $this->db->prepare('INSERT INTO equipo(id_equipo, equipo, division) VALUES(?,?,?)');
            
            $query->execute(array($id_equipo, $equipo ,$division));
        
            //header("Location: ".BASE_URL."home");
        }
        
        
        function deleteCiclista($ciclistas_id){
            
            $query = $this->db->prepare('DELETE FROM corredor WHERE id=?');
            $query->execute(array($ciclistas_id));
        
            //header("Location: ".BASE_URL."home");
        }

        function deleteEquipo($equipo_id){
        
            $query = $this->db->prepare('DELETE FROM equipo WHERE id_equipo=?');
            $query->execute(array($equipo_id));
        
            //header("Location: ".BASE_URL."home");
        }
        
        function editCiclista($newcorredor, $newequipo,  $newedad, $newespecialidad, $id){

            echo " variable id en el model es: " . $id;
            echo " variable newcorredor es: " . $newcorredor;
            //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        
            $query = $this->db->prepare("UPDATE corredor SET corredor=?, id_equipo=?, edad=?, especialidad=?  WHERE id=?");
            $results = $query->execute(array($newcorredor, $newequipo,  $newedad, $newespecialidad, $id));
            //echo "este es el echo: " . $query->rowCount();
            echo " El id despues de esecute es: " .  $id;
            //header("Location: ".BASE_URL."home");
        }
        
        function editEquipo($newequipo, $newdivision, $id){

            echo " variable id en el model es: " . $id;
            echo " variable newcorredor es: " . $newcorredor;

            //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $query = $this->db->prepare("UPDATE equipo SET equipo=?, division=? WHERE id_equipo=?");
            $results = $query->execute(array($newequipo, $newdivision, $id));
            //echo "este es el echo: " . $query->rowCount();
            echo " El id despues de esecute es: " .  $id;
            //header("Location: ".BASE_URL."home");
        }

        function muestroCorredores($equipocorredor_id){
            
            $query = $this->db->prepare('SELECT * FROM `corredor` WHERE id_equipo ='. $equipocorredor_id);

            function getCiclistas($query, $equipocorredor_id){
            
                $query->execute();
            
                $ciclistas = $query->fetchAll(PDO::FETCH_OBJ);
            
                return $ciclistas;
        
            }
        
            $ciclistas = getCiclistas($query, $equipocorredor_id);
            
            echo '<center>';
            echo '<h3>Lista de ciclistas</h3>';
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

    function muestroComentarios($comentario_id){
        
        $query = $this->db->prepare('SELECT * FROM `corredor` WHERE id ='. $comentario_id);

        function getCiclistas($query, $comentario_id){
        
            $query->execute();
        
            $ciclistas = $query->fetchAll(PDO::FETCH_OBJ);
        
            return $ciclistas;
    
        }
    
        $ciclistas = getCiclistas($query, $comentario_id);
        
        echo '<h1>Comentarios del corredor</h1>';

        foreach($ciclistas as $ciclista){
            //$ciclista->id;
            echo '<h2>Ingrese su comentario del ciclista '.$ciclista->corredor.'</h2>';
        }
        echo '
            <div class="col-sm-9">
                <input type="text"  class="form-control" id="comentario" placeholder="Su comentario" name="input_comentario">
            </div>    
        ';
}

        function GetequipoParaSelect(){
            $sentencia = $this->db->prepare("SELECT * FROM equipo");
            $sentencia->execute(array());
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
    
    
        function GetCiclistaById($id) {
                $sentencia = $this->db->prepare("SELECT * FROM ciclista INNER JOIN equipos ON ciclista.id_equipo = equipo.id_equipo WHERE id=?");
                $sentencia->execute(array($id));
                return $sentencia->fetch(PDO::FETCH_OBJ);
            }

    }

?>
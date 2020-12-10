<?php

    class usuariosModel{

        private $db;
        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db-ciclista;charset=utf8'
            , 'root', '');
        }
        
        function listarUsuarios(){//Voy a tener que modificar aca si modifico la base de datos

            $query = $this->db->prepare('SELECT * FROM administradores');

            function getUsuarios($query){
        
            $query->execute();
        
            $usuarios = $query->fetchAll(PDO::FETCH_OBJ);
        
            return $usuarios;
        
            }
        
            $usuarios = getUsuarios($query);
            
            echo '<center>';
            echo '<table>';
            echo '<tr>';
            echo '<td>ID</td>';
            echo '<td>Nombre</td>';
            echo '<td>Borrar</td>';
            echo '</tr>';
        
            foreach($usuarios as $usuario){
                $usuario->id_admin;
                echo "<tr>";
                echo '<td>'. $usuario->id_admin.'</td>';
                echo '<td>'. $usuario->nombre.'</td>';
                echo '<td><button type="button" class="btn btn-outline-danger"><a href="borrarUsuario/'.$usuario->id_admin.'">Borrar</a></button></td>';
                echo "</tr>";
            }
            echo "</table>";
            echo '</center>';
            
        }

        function deleteUsuario($usuarios_id){
            $query = $this->db->prepare('DELETE FROM administradores WHERE id_admin=?');
            $query->execute(array($usuarios_id));
        
        }

        function GetUser($user){
                  
            $sentencia = $this->db->prepare("SELECT * FROM administradores WHERE nombre=?");
            $sentencia->execute(array($user));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }

    }
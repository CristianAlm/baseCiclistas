<?php

    class loginModel{


        function getAdministradores(){
            $db = new PDO('mysql:host=localhost;'
        .'dbname=db-ciclista;charset=utf8'
        , 'root', '');
    
        $query = $db->prepare('SELECT * FROM login');
        $query->execute();
    
        $administradores = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $administradores;
    
        }


    }

?>
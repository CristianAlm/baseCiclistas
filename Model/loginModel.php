<?php 

class loginModel {	


	function GetUser($user){
		$db = new PDO('mysql:host=localhost;'
              .'dbname=db-ciclista;charset=utf8'
			  , 'root', '');
			  
		$sentencia = $db->prepare("SELECT * FROM administradores WHERE nombre=?");
		$sentencia->execute(array($user));
		return $sentencia->fetch(PDO::FETCH_OBJ);
	}

	function createUser($user, $pass) {
      $db = new PDO('mysql:host=localhost;'
        .'dbname=db-ciclista;charset=utf8'
        , 'root', '');

      $hash = password_hash($pass, PASSWORD_DEFAULT);

      //$query =  "INSERT INTO administradores (nombre, password) VALUES ('" . $user . "','" . $hash . "')";

      $query = "INSERT INTO administradores (nombre, password) VALUES (?,?)";
      $sentencia = $db->prepare($query);
      $sentencia->execute([$user, $hash]);
    }



}

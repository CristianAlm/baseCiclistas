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



}

?>
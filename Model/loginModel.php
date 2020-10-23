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


			/*********************/
			/*Registro de usuario*/
			/*********************/
	/*
		$pass = "12345";//viene desde un input
		$hash = password_hash($pass, PASSWORD_DEFAULT);

		$passwordInput = $pass;
		if (password_verify($passwordInput, $hash)) {
			echo "Credenciales validas";
		}else{
			echo "Credenciales invalidas";
		}
	*/

}

?>
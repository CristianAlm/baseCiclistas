<?php 

class loginModel {
  
  private $db;
  public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db-ciclista;charset=utf8'
            , 'root', '');
  }

	function GetUser($user){
			  
		$sentencia = $this->db->prepare("SELECT * FROM administradores WHERE nombre=?");
		$sentencia->execute(array($user));
		return $sentencia->fetch(PDO::FETCH_OBJ);
	}

	function createUser($user, $pass) {

      $hash = password_hash($pass, PASSWORD_DEFAULT);

      //$query =  "INSERT INTO administradores (nombre, password) VALUES ('" . $user . "','" . $hash . "')";

      $query = "INSERT INTO administradores (nombre, password) VALUES (?,?)";
      $sentencia = $this->db->prepare($query);
      $sentencia->execute([$user, $hash]);
    }



}

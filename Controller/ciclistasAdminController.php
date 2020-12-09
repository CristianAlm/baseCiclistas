<?php 

require_once "./View/usuariosView.php";
require_once "./Model/usuariosModel.php";
require_once "./View/loginAdminView.php";



class ciclistasAdminController{

	private $view;
	private $model;
	private $viewAdmin;
	//private $authHelper;

	public function __construct(){
		$this->view = new usuariosView();
		$this->model = new usuariosModel();
		$this->viewAdmin = new loginAdminView();
	}

	function Home(){
		$this->view->showHome();
		$usuarios = $this->model->listarUsuarios();
	}

	function deleteUsuarios($params = null){
		$usuarios_id = $params[':ID'];

		$this->model->deleteUsuario($usuarios_id);
		header("Location: ".BASE_URL."tablaUsuarios");
	}

	function loginAdmin(){
		$this->viewAdmin->showHome();
	}


	// El administrador con mayores facultades tiene la contraseña '54321'
	public function VerifyUserAdmin() {
		$user = $_POST['input_user'];
		$pass = $_POST['input_pass'];

		if(($pass == "54321")&&($user == "adminRey")){
			header("Location:".BASE_URL."tablaUsuarios");
		}else{
			header("Location:".BASE_URL."paraLogin");
		}
	}

}


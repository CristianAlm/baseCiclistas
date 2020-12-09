<?php 

require_once "./View/usuariosView.php";
require_once "./Model/usuariosModel.php";



class ciclistasAdminController{

	private $view;
	private $model;
	//private $authHelper;

	public function __construct(){
		$this->view = new usuariosView();
		$this->model = new usuariosModel();
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

}


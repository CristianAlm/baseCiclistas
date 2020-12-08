<?php 

require_once "./View/loginView.php";
require_once "./Model/loginModel.php";
require_once "./Model/usuariosModel.php";



class ciclistasAdminController{

	private $view;
	private $model;
	private $modelCiclista;
	//private $authHelper;

	public function __construct(){
		$this->view = new loginView();
		$this->model = new loginModel();
		$this->modelCiclista = new usuarioModel();
	}

	function listaUsuarios(){
		echo 'anda el controller man';
	}

}


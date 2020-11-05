<?php 

require_once "./View/loginView.php";
require_once "./View/registerView.php";
require_once "./Model/loginModel.php";
//require_once "./Helpers/Helper.php";



class loginController {

	private $view;
	private $registerView;
	private $model;
	//private $authHelper;

	public function __construct(){
		$this->view = new loginView();
		$this->registerView = new registerView();
		$this->model = new loginModel();
		//$this->authHelper = new Helper();
	}

	function ShowLogin() {
		$this->view->ShowLogin();
	}

	function showRegister() {
      $this->registerView->showRegister();
    }

	public function VerifyUser() {
		$user = $_POST['input_user'];
		$pass = $_POST['input_pass'];

		if(isset($user)){
			$userFromDB = $this->model->GetUser($user);
			/**
			 var_dump($userFromDB->password);
			 var_dump($pass);
			 var_dump($user);
			 die;
			 * 
			 */
			
			if(isset($userFromDB) && $userFromDB){ //existe y es true.
				//	Existe el usuario
				if(password_verify($pass, $userFromDB->password)) {
					//$this->view->ShowLogin("Contraseña correcta");
					//$this->authHelper->Login($userFromDB);
					header("Location:".BASE_URL."paraLogin");
				}else{
					$this->view->ShowLogin("Contraseña incorrecta");
				}
			}else{
				//No existe el user en la DB
				$this->view->ShowLogin("El usuario no existe");
			}
		}
	}

	public function registerUser() {
      $user = $_POST['input_user'];
      $pass = $_POST['input_pass'];

      $userFromDB = $this->model->GetUser($user);
      if ($userFromDB) {
        $this->registerView->showRegister("El nombre ya existe");
        return;
      }

      try {
        $this->model->createUser($user, $pass);
        $this->view->ShowLogin("Usuario creado exitosamente");
      } catch (Exception $e) {
        $this->view->showRegister("Hubo un problema durante el registro");
      }
    }

	//$2y$12$vcP6PqTDVHRswJcqzpIpwu5LEbs3TT8hO6ZzppzPQIu


	public function Logout() {
        //$this->authHelper->Logout();
		//header('Location: ' . LOGIN);
		header("Location:".BASE_URL."home");
    }


}
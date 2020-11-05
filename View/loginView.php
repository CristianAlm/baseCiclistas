<?php

//El smarty va en la view
require_once "./libs/smarty/Smarty.class.php";

class loginView {	
	private $title;
	function __construct() {		
		$this->title = "nombe y contraseña";
	}

	function ShowLogin($message = ""){
		$smarty = new Smarty();
		$smarty->assign('titulo',$this->title);
		$smarty->assign('message',$message);

		$smarty->display('templates/login.tpl'); // muestro el template 		
	}
}

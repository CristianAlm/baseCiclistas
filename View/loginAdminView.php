<?php

//El smarty va en la view
require_once "./libs/smarty/Smarty.class.php";

class loginAdminView{	
	private $title;
	function __construct() {		
		$this->title = "nombe y contraseña del Admin Rey";
	}

	function showHome($message = ""){
		$smarty = new Smarty();
		$smarty->assign('titulo',$this->title);
		$smarty->assign('message',$message);

		$smarty->display('templates/loginAdmin.tpl'); // muestro el template 		
	}
}

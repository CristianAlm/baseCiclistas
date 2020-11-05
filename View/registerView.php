<?php

//El smarty va en la view
require_once "./libs/smarty/Smarty.class.php";

class registerView {
  private $title;
  function __construct() {
    $this->title = "Registrar";
  }

  function showRegister($message = ""){
    $smarty = new Smarty();
    $smarty->assign('titulo',$this->title);
    $smarty->assign('message',$message);

    $smarty->display('templates/register.tpl'); // muestro el template
  }
}

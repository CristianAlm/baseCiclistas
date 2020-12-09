<?php

    require_once "./libs/smarty/Smarty.class.php";

    class usuariosView{

        private $title;

        function __construct(){
            $this->title="Lista de usuarios rigistrados";
        }

        function showHome(){

            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            

            $smarty->display('templates/usuarios.tpl'); // muestro el template 

                        
        }
    }
?>
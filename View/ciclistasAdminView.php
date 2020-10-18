<?php

    require_once "./libs/smarty/Smarty.class.php";

    class ciclistasAdminView{

        private $title;

        function __construct(){
            $this->title="Ingresar Corredor o equipo";
        }

        function showHomeAdmin(){//me va a llegar una lista de ciclistas y me fijo si tengo que pasar por parametro $ciclistas
            
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            

            $smarty->display('templates/ciclistasAdminView.tpl'); // muestro el template 
            

        }
    }
?>
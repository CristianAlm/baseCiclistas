<?php

    require_once "./libs/smarty/Smarty.class.php";

    class ciclistasView{

        private $title;

        function __construct(){
            $this->title="Tabla de corredores Inscriptos";
        }

        function showHome(){//me va a llegar una lista de ciclistas y me fijo si tengo que pasar por parametro $ciclistas

            $smarty = new Smarty();
            $smarty->assign('titulo', $this->title);
            

            $smarty->display('templates/ciclistasView.tpl'); // muestro el template 

                        
        }
    }
?>
<?php

require_once "./libs/smarty/Smarty.class.php";

    class editarCiclistasView{

        private $title;

        function __construct(){
            $this->title="Editar corredor";
        }

        function showEdit($ciclistas_id, $newcorredor, $newequipo,  $newedad, $newespecialidad){
           
          $smarty = new Smarty();
          $smarty->assign('titulo', $this->title);
          $smarty->assign('idCiclista', $ciclistas_id);
          $smarty->assign('nuevoCorredor', $newcorredor);
          $smarty->assign('nuevoEquipo', $newequipo);
          $smarty->assign('nuevaEdad', $newedad);
          $smarty->assign('nuevaEspecialidad', $newespecialidad);

          $smarty->display('templates/ciclistas.tpl'); // muestro el template 
           
        }

    }
?>
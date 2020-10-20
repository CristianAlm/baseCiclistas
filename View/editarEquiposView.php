<?php

require_once "./libs/smarty/Smarty.class.php";

    class editarEquiposView{

        private $title;

        function __construct(){
            $this->title="Editar equipo";
        }

        function showEditEquipo($equipo_id, $newequipo, $newdivision){
           
          $smarty = new Smarty();
          $smarty->assign('titulo', $this->title);
          $smarty->assign('idEquipo', $equipo_id);
          $smarty->assign('nuevoEquipo', $newequipo);
          $smarty->assign('nuevoDivision', $newdivision);

          $smarty->display('templates/equipos.tpl'); // muestro el template //cambiar esto
           
        }

    }
?>
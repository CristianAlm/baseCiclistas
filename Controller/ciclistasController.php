<?php

    require_once "./View/ciclistasView.php";
    require_once "./Model/ciclistasModel.php";

    class ciclistasController{

        private $view;
        private $model;

        function __construct(){
            $this->view = new ciclistasView();
            $this->model = new ciclistasModel();

        }

        function Home(){
            $ciclistas = $this->model->listarCiclistas();
            $this->view->showHome();
        }

    }

?>
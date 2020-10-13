<?php

    require_once "./View/ciclistasView.php";
    require_once "./Model/ciclistasModel.php";
    require_once "./View/editarCiclistasView.php";

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

        function insertarEquipo(){
            $this->model->insertarEquipo($_POST['input_equipo'],$_POST['input_division'],$_POST['input_pais']);
        }
        function insertarCiclista(){
            $this->model->insertarCiclista($_POST['input_corredor'],$_POST['input_equipo'],$_POST['input_edad'],$_POST['input_especialidad']);
            header("Location: ".BASE_URL."home");
        }

        function deleteCiclista($ciclistas_id){
            $this->model->deleteCiclista($ciclistas_id);
            header("Location: ".BASE_URL."home");
        }

    }

?>
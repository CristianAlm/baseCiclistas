<?php

    require_once "./View/ciclistasView.php";
    require_once "./Model/ciclistasModel.php";
    require_once "./View/editarCiclistasView.php";
    require_once "./View/loginView.php";

    class ciclistasController{

        private $view;
        private $model;
        private $edit;
        private $loginView;

        function __construct(){
            $this->view = new ciclistasView();
            $this->model = new ciclistasModel();
            $this->edit = new editarCiclistasView();
            $this->loginView = new loginView();

        }

        function loginHome(){
            $this->loginView->showLogin();
        }

        function Home(){
            $ciclistas = $this->model->listarCiclistas();
            $this->view->showHome();
        }

        function editBase($ciclistas_id){
            //$id = $params[1];
            $ciclista = $this->model->getCiclistaparaeditar($ciclistas_id);
            //var_dump($ciclista);
            $this->edit->showEdit($ciclista->id,$ciclista->corredor,$ciclista->id_equipo,$ciclista->edad,$ciclista->especialidad);
            
        }

        function paraEditarCiclista($id){
            echo " variable id en el controller es: " . $id;
            $this->model->editCiclista($_POST['corredor'], $_POST['equipo'], $_POST['edad'], $_POST['especialidad'], $id);
            header("Location: ".BASE_URL."login");
        }

        function insertarEquipo(){
            $this->model->insertarEquipo($_POST['input_equipo'],$_POST['input_division'],$_POST['input_pais']);
        }
        function insertarCiclista(){
            $this->model->insertarCiclista($_POST['input_corredor'],$_POST['input_equipo'],$_POST['input_edad'],$_POST['input_especialidad']);
            header("Location: ".BASE_URL."login");
        }

        function deleteCiclista($ciclistas_id){
            $this->model->deleteCiclista($ciclistas_id);
            header("Location: ".BASE_URL."home");
        }

    }

?>
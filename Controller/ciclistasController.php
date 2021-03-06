<?php

    require_once "./View/ciclistasView.php";
    require_once "./View/ciclistasAdminView.php";
    require_once "./Model/ciclistasModel.php";
    require_once "./View/editarCiclistasView.php";
    require_once "./View/editarEquiposView.php";
    require_once "./View/loginView.php";

    class ciclistasController{

        private $view;
        private $viewAdmin;
        private $model;
        private $edit;
        private $editarEquipo;

        function __construct(){
            $this->view = new ciclistasView();
            $this->model = new ciclistasModel();
            $this->edit = new editarCiclistasView();
            $this->viewAdmin = new ciclistasAdminView();
            $this->editarEquipo = new editarEquiposView();

        }

        private function checkLoggedIn(){

            session_start();

            if(!isset($_SESSION['NOMBRE'])){
                header('Location: ' . LOGIN);
                die();
            }

        }


        function Home(){

            $this->checkLoggedIn();

            //$ciclistas = $this->model->listarCiclistas();
            $this->view->showHome();
            $ciclistas = $this->model->listarCiclistassinAcceso();
            $equipos = $this->model->listarEquipossinAcceso();
        }
        function manipularTabla(){
            $this->viewAdmin->showHomeAdmin();
            $ciclistas = $this->model->listarCiclistas();
            $equipos = $this->model->listarEquipos();
        }

        function editBase($params = null){

            $this->checkLoggedIn();
            
            $ciclistas_id = $params[':ID'];//Mirar si tengo que modificar esto

            $ciclista = $this->model->getCiclistaparaeditar($ciclistas_id);
            //var_dump($ciclista);
            $this->edit->showEdit($ciclista->id,$ciclista->corredor,$ciclista->id_equipo,$ciclista->edad,$ciclista->especialidad);
            
        }

        function paraEditarCiclista($params = null){

            $this->checkLoggedIn();

            $id = $params[':ID'];//Mirar si tengque modificar id

            echo " variable id en el controller es: " . $id;
            $this->model->editCiclista($_POST['corredor'], $_POST['equipo'], $_POST['edad'], $_POST['especialidad'], $id);
            header("Location: ".BASE_URL."paraLogin");
        }

        
         function editBaseEquipo($params = null){
            
            $this->checkLoggedIn();

            $equipo_id = $params[':ID'];//Mirar si tengo que modificar esto
            $equipo = $this->model->getEquipoparaeditar($equipo_id);
            $this->editarEquipo->showEditEquipo($equipo->id_equipo,$equipo->equipo,$equipo->division);
            
        }

        function EditarEquipo($params = null){

            $this->checkLoggedIn();

            $id_equipo = $params[':ID'];//Mirar si tengque modificar id

            echo " variable id en el controller es: " . $id_equipo;
            $this->model->editEquipo($_POST['equipo'], $_POST['division'], $id_equipo);
            header("Location: ".BASE_URL."paraLogin");
        }

        function insertarEquipo(){//voy a tener que modifica aca si toco la base de datos

            $this->checkLoggedIn();

            $this->model->insertarEquipo($_POST['input_id_equipo'],$_POST['input_equipo'],$_POST['input_division']);
            header("Location: ".BASE_URL."paraLogin");
        }
        function insertarCiclista(){

            $this->checkLoggedIn();

            $this->model->insertarCiclista($_POST['input_corredor'],$_POST['input_equipo'],$_POST['input_edad'],$_POST['input_especialidad']);
            header("Location: ".BASE_URL."paraLogin");
        }

        function deleteCiclista($params = null){

            $this->checkLoggedIn();

            $ciclistas_id = $params[':ID'];//Mirar si tengo que modificar el id

            $this->model->deleteCiclista($ciclistas_id);//Lo mismo aca
            header("Location: ".BASE_URL."home");
        }

        function deleteEquipo($params = null){

            $this->checkLoggedIn();

            $equipo_id = $params[':ID'];//Mirar si tengo que modificar el id
            $this->model->deleteEquipo($equipo_id);//Lo mismo aca

            header("Location: ".BASE_URL."home");
        }

        function muestro($params = null){

            $this->checkLoggedIn();
            
            $equipocorredor_id = $params[':ID'];
            //echo "en la funcion mostrar corredores y el id es: " . $equipocorredor_id;
            $this->model->muestroCorredores($equipocorredor_id);

        }

        function muestroomentario($params = null){
            $comentario_id = $params[':ID'];
            //echo "en la funcion mostrar corredores y el id es: " . $equipocorredor_id;
            $this->model->muestroComentarios($comentario_id);

        }

    }

?>
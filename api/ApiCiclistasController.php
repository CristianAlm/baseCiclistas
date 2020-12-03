<?php

    require_once './Model/ciclistasModel.php';
    require_once './api/APIView.php';
    

    class ApiCiclistasController{

        private $model;
        private $view;

        function __construct(){
            $this->model = new ciclistasModel();
            $this->view = new APIView();       
        }

        public function getCiclistas($params = null){
            $ciclistas = $this->model->getCiclistas();
            $this->view->response($ciclistas, 200);
            //var_dump($ciclistas);
        }

        public function getCiclista($params = null){
            $id = $params[':ID'];
            $ciclista = $this->model->getCiclista($id);

            if(!empty($ciclista))
                $this->view->response($ciclista, 200);
            else
                $this->view->response("El ciclista con el id= $id no existe", 404);    

        }
    }
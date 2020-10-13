<?php
    class loginView{

        private $title;

        function __construct(){
            $this->title="Ingrese Admin";
        }

        function showLogin(){
            $html = '
            <!doctype html>
            <html lang="en">
                <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

                <title>'.$this->title.'</title>
                </head>
                <body>
                <center>
                <h1>'.$this->title.'</h1>

                    <div class="container">
                        <form action="login" method="post">
                            <div class="form-group">
                                <label for="nombre-admin">Nombre de Administrador</label>
                                <input id="nombre-admin" class="form-control"  name="nombre-admin" type="text" placeholder="name"/>
                            </div>
                            <div class="form-group">
                                <label for="pass-admin">Contraeña</label>
                                <input id="pass-admin" class="form-control"  name="pass-admin" type="password" placeholder="password"/>
                            </div>
                            <button type="submit" class="btn btn-primary">create</button>
                        </form>
                    </div>
                </center>

                <!-- Optional JavaScript -->
                        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                        </body>

            </html>
            
            ';
            echo $html;
        }
    }
?>
<!doctype html>
                    <html lang="en">
                        <head>
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                        <!-- Bootstrap CSS -->
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

                        <title>{$titulo}</title>
                        <base href="{BASE_URL}">
                        </head>
                        <body>

                        <center>
                            <h1>{$titulo}</h1>
                            <button type="button" class="btn btn-outline-danger"><a href="paraLogout">Salir</a></button>

                            <div class="container">
                                    <form action="verifyAdmin" method="post">
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">Administrador Rey</label>
                                            <div class="col-sm-9">
                                                <input type="text"  class="form-control" id="user" placeholder="Nombre" name="input_user">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">Password Rey</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="password" placeholder="Password" name="input_pass">
                                            </div>
                                        </div>
                                            <center>
                                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                            </center>
                                    </form>
                            </div>
                        </center>
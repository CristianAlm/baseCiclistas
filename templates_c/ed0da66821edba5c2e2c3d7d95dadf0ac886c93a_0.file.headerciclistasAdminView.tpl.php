<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-09 19:14:28
  from 'C:\xampp\htdocs\baseCiclista\templates\headerciclistasAdminView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd1140465fca0_04444644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed0da66821edba5c2e2c3d7d95dadf0ac886c93a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baseCiclista\\templates\\headerciclistasAdminView.tpl',
      1 => 1607537665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd1140465fca0_04444644 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
                    <html lang="en">
                        <head>
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                        <!-- Bootstrap CSS -->
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

                        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
                        <base href="<?php echo BASE_URL;?>
">
                        </head>
                        <body>

                        <center>
                            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
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
                        </center><?php }
}

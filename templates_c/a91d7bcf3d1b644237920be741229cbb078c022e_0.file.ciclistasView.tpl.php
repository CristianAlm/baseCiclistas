<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 15:52:11
  from 'C:\xampp\htdocs\baseCiclistas\templates\ciclistasView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88540be2e4f3_99148182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91d7bcf3d1b644237920be741229cbb078c022e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baseCiclistas\\templates\\ciclistasView.tpl',
      1 => 1602769925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f88540be2e4f3_99148182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<center>
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
                            <button type="submit" class="btn btn-outline-danger"><a href="paraLogin">Login Admin</a></button>
                        </form>
                    </div>

</center>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

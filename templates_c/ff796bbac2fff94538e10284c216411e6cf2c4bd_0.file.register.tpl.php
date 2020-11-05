<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-05 18:43:23
  from 'C:\xampp\htdocs\baseCiclista\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa439bb3285f4_42478909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff796bbac2fff94538e10284c216411e6cf2c4bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baseCiclista\\templates\\register.tpl',
      1 => 1603476628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fa439bb3285f4_42478909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>
    <?php }?>

    <form action="registerUser" method="post">
        <div class="form-group row">
            <label for="user" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user" placeholder="nombre" name="input_user">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Password" name="input_pass">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		<?php }
}

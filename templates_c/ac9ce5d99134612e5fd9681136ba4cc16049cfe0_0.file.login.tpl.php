<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 14:39:33
  from 'C:\xampp\htdocs\baseCiclista\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f92cf05b96680_17674066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac9ce5d99134612e5fd9681136ba4cc16049cfe0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baseCiclista\\templates\\login.tpl',
      1 => 1603456708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f92cf05b96680_17674066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
	<div class="alert alert-danger" role="alert">
	  	<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	</div>	
<?php }?>

<center>
    <div class="contenedor">
        <form action="verifyUser" method="post">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Administrador</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control-plaintext" id="user" placeholder="nombre" name="input_user">
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
</center>  
	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>		<?php }
}

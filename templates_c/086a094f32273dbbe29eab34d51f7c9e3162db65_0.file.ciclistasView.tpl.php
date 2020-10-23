<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 14:58:52
  from 'C:\xampp\htdocs\baseCiclista\templates\ciclistasView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f92d38c2a6bb8_07585172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '086a094f32273dbbe29eab34d51f7c9e3162db65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baseCiclista\\templates\\ciclistasView.tpl',
      1 => 1603457925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f92d38c2a6bb8_07585172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<center>
    <div class="container">
            <button type="submit" class="btn btn-outline-danger"><a href="irLogeo">Login</a></button>
    </div>

</center>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

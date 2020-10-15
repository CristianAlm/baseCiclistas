<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 12:58:17
  from 'C:\xampp\htdocs\baseCiclistas\templates\ciclistasView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f882b4941e963_08776202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a91d7bcf3d1b644237920be741229cbb078c022e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baseCiclistas\\templates\\ciclistasView.tpl',
      1 => 1602759492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f882b4941e963_08776202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<center>
    <button type="button" class="btn btn-outline-danger"><a href="paraLogin">Login Admin</a></button>
</center>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

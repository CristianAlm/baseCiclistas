<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 13:43:52
  from 'C:\xampp\htdocs\baseCiclista\templates\equipos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc4e908e9aba2_66165564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0574beca5e1b45f58c5c7e5d7f5a18a733fe1717' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baseCiclista\\templates\\equipos.tpl',
      1 => 1603473295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc4e908e9aba2_66165564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <form action="paraEditarEquipo/<?php echo $_smarty_tpl->tpl_vars['idEquipo']->value;?>
" method="post">
        <div class="form-group">
            <label for="equipo">Equipo</label>
            <input class="form-control" id="equipo" name="equipo" aria-describedby="emailHelp" value="<?php echo $_smarty_tpl->tpl_vars['nuevoEquipo']->value;?>
">
            <small id="emailHelp" class="form-text text-muted">Nombre del equipo</small>
        </div>
        <div class="form-group">
            <label for="division">Division</label>
            <input class="form-control" id="division" name="division" value="<?php echo $_smarty_tpl->tpl_vars['nuevoDivision']->value;?>
">
        </div>
        <button type="submit" class="btn btn-primary">Editar equipo</button>
        </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

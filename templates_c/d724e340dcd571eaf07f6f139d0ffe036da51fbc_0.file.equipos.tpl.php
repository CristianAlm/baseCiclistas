<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 22:43:19
  from 'C:\xampp\htdocs\baseCiclistas\templates\equipos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8f4be7d4ecc5_68416737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd724e340dcd571eaf07f6f139d0ffe036da51fbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baseCiclistas\\templates\\equipos.tpl',
      1 => 1603226471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8f4be7d4ecc5_68416737 (Smarty_Internal_Template $_smarty_tpl) {
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

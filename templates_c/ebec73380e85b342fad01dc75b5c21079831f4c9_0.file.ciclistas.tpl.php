<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 12:48:53
  from 'C:\xampp\htdocs\baseCiclistas\templates\ciclistas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8829151c9a98_67446391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebec73380e85b342fad01dc75b5c21079831f4c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baseCiclistas\\templates\\ciclistas.tpl',
      1 => 1602758913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8829151c9a98_67446391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <form action="paraEditar/<?php echo $_smarty_tpl->tpl_vars['idCiclista']->value;?>
" method="post">
        <div class="form-group">
            <label for="corredor">Corredor</label>
            <input class="form-control" id="corredor" name="corredor" aria-describedby="emailHelp" value="<?php echo $_smarty_tpl->tpl_vars['nuevoCorredor']->value;?>
">
            <small id="emailHelp" class="form-text text-muted">Nombre y apellido del corredor</small>
        </div>
        <div class="form-group">
            <label for="equipo">Equipo</label>
            <input class="form-control" id="equipo" name="equipo" value="<?php echo $_smarty_tpl->tpl_vars['nuevoEquipo']->value;?>
">
        </div>
        <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                    <input class="form-control" id="especialidad" name="especialidad" aria-describedby="emailHelp" value="<?php echo $_smarty_tpl->tpl_vars['nuevaEspecialidad']->value;?>
">
                    <small id="emailHelp" class="form-text text-muted">Recuerde que las especialidad son 6: vuelta por etapas, escalador, sprinter, clasicomano, vueltas de 1 semana y gregario</small>
                </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input class="form-control" id="edad"  name="edad" value="<?php echo $_smarty_tpl->tpl_vars['nuevaEdad']->value;?>
">
        </div>
        
        <button type="submit" class="btn btn-primary">Editar</button>
        </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

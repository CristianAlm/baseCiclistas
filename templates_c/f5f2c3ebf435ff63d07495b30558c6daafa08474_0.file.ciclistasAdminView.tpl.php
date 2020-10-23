<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 14:24:36
  from 'C:\xampp\htdocs\baseCiclista\templates\ciclistasAdminView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f92cb84f0ce75_58910531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5f2c3ebf435ff63d07495b30558c6daafa08474' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baseCiclista\\templates\\ciclistasAdminView.tpl',
      1 => 1603455862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerciclistasAdminView.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f92cb84f0ce75_58910531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerciclistasAdminView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Formulario de corredor</h2>
<div class="container">
    <form action="insert" method="post">
        <div class="form-group">
            <label for="corredor">Corredor</label>
            <input class="form-control" id="corredor" name="input_corredor" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Nombre y apellido del corredor</small>
        </div>
        <div class="form-group">
            <label for="equipo">Equipo</label>
            <input class="form-control" id="equipo" name="input_equipo">
            <small id="emailHelp" class="form-text text-muted">El ID del equipo</small> 
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input class="form-control" id="edad"  name="input_edad">
        </div> 
        <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <input class="form-control" id="especialidad" name="input_especialidad" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Recuerde que las especialidad son 6: vuelta por etapas, escalador, sprinter, clasicomano, vueltas de 1 semana y gregario</small>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Corredor</button>
    </form>
</div>

<h2>Formulario de equipo</h2>
<div class="container">
    <form action="insertEquipo" method="post">
        <div class="form-group">
            <label for="id_equipo">ID equipo</label>
            <input class="form-control" id="id_equipo" name="input_id_equipo" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Nombre y apellido del corredor</small>
        </div>
        <div class="form-group">
            <label for="equipo">Equipo</label>
            <input class="form-control" id="equipo" name="input_equipo">
            <small id="emailHelp" class="form-text text-muted">El ID del equipo</small> 
        </div>
        <div class="form-group">
            <label for="division">Division</label>
            <input class="form-control" id="division"  name="input_division">
        </div>
        <button type="submit" class="btn btn-primary">Agregar Equipo</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

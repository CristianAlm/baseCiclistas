<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 13:06:14
  from 'C:\xampp\htdocs\baseCiclistas\templates\ciclistasAdminView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f882d2692d4f0_04087642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e10abc6b4e5f6c4290d847869b3d62a7c35c0719' => 
    array (
      0 => 'C:\\xampp\\htdocs\\baseCiclistas\\templates\\ciclistasAdminView.tpl',
      1 => 1602759959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerciclistasAdminView.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f882d2692d4f0_04087642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:headerciclistasAdminView.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
        </div>
        <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <input class="form-control" id="especialidad" name="input_especialidad" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Recuerde que las especialidad son 6: vuelta por etapas, escalador, sprinter, clasicomano, vueltas de 1 semana y gregario</small>
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input class="form-control" id="edad"  name="input_edad">
        </div> 
        <div class="form-group">
            <label for="input_division">Categoria del equipo:</label>
                <input class="form-control" id="catEquipos" name="input_division" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Recuerde que las categorias son 3: Word Tour, Continental Pro y Continental</small>
        </div>
        <div class="form-group">
            <label for="input_pais">Pais Equipo</label>
            <input class="form-control" id="pais"  name="input_pais">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

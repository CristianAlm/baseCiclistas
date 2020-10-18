{include file="headerciclistasAdminView.tpl"}

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

{include file="footer.tpl"}
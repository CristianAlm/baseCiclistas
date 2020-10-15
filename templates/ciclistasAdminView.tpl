{include file="headerciclistasAdminView.tpl"}

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

{include file="footer.tpl"}
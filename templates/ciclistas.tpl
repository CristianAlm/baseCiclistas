{include file="header.tpl"}

<div class="container">
    <form action="paraEditar/{$idCiclista}" method="post">
        <div class="form-group">
            <label for="corredor">Corredor</label>
            <input class="form-control" id="corredor" name="corredor" aria-describedby="emailHelp" value={$nuevoCorredor}>
            <small id="emailHelp" class="form-text text-muted">Nombre y apellido del corredor</small>
        </div>
        <div class="form-group">
            <label for="equipo">Equipo</label>
            <input class="form-control" id="equipo" name="equipo" value={$nuevoEquipo}>
        </div>
        <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                    <input class="form-control" id="especialidad" name="especialidad" aria-describedby="emailHelp" value={$nuevaEspecialidad}>
                    <small id="emailHelp" class="form-text text-muted">Recuerde que las especialidad son 6: vuelta por etapas, escalador, sprinter, clasicomano, vueltas de 1 semana y gregario</small>
                </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input class="form-control" id="edad"  name="edad" value={$nuevaEdad}>
        </div>
        
        <div class="form-group">
                <label for="input_division">Categoria del equipo:</label>
                <input class="form-control" id="catEquipos" name="division" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Recuerde que las categorias son 3: Word Tour, Continental Pro y Continental</small>
        </div>

        <div class="form-group">
            <label for="pais">Pais Equipo</label>
            <input class="form-control" id="pais"  name="pais">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
        </form>
</div>

{include file="footer.tpl"}
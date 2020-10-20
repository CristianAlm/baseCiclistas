{include file="header.tpl"}

<div class="container">
    <form action="paraEditarEquipo/{$idEquipo}" method="post">
        <div class="form-group">
            <label for="equipo">Equipo</label>
            <input class="form-control" id="equipo" name="equipo" aria-describedby="emailHelp" value="{$nuevoEquipo}">
            <small id="emailHelp" class="form-text text-muted">Nombre del equipo</small>
        </div>
        <div class="form-group">
            <label for="division">Division</label>
            <input class="form-control" id="division" name="division" value="{$nuevoDivision}">
        </div>
        <button type="submit" class="btn btn-primary">Editar equipo</button>
        </form>
</div>

{include file="footer.tpl"}
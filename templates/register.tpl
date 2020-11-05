{include file="header.tpl"}

<div class="container">
    {if $message != ""}
        <div class="alert alert-danger" role="alert">
            {$message}
        </div>
    {/if}

    <form action="registerUser" method="post">
        <div class="form-group row">
            <label for="user" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user" placeholder="nombre" name="input_user">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Password" name="input_pass">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>

{include file="footer.tpl"}		
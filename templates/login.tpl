{include file="header.tpl"}


{if $message != ""}
	<div class="alert alert-danger" role="alert">
	  	{$message}
	</div>	
{/if}

<div class="container">
    <form action="verifyUser" method="post">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Administrador</label>
            <div class="col-sm-9">
                <input type="text"  class="form-control" id="user" placeholder="nombre" name="input_user">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="password" placeholder="Password" name="input_pass">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>
{include file="footer.tpl"}		
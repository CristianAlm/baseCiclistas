{include file="header.tpl"}


{if $message != ""}
	<div class="alert alert-danger" role="alert">
	  	{$message}
	</div>	
{/if}

<div class="container">
    <form action="verifyAdmin" method="post">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Administrador Rey</label>
            <div class="col-sm-9">
                <input type="text"  class="form-control" id="user" placeholder="Nombre" name="input_user">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Password Rey</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="password" placeholder="Password" name="input_pass">
            </div>
        </div>
            <center>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
            </center>
    </form>
</div>
{include file="footer.tpl"}	
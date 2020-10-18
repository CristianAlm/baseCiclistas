
{include file="header.tpl"}

<center>
    <div class="container">
                        <form action="login" method="post">
                            <div class="form-group">
                                <label for="nombre-admin">Nombre de Administrador</label>
                                <input id="nombre-admin" class="form-control"  name="nombre-admin" type="text" placeholder="name"/>
                            </div>
                            <div class="form-group">
                                <label for="pass-admin">Contraeña</label>
                                <input id="pass-admin" class="form-control"  name="pass-admin" type="password" placeholder="password"/>
                            </div>
                            <button type="submit" class="btn btn-primary">create</button>
                            <button type="submit" class="btn btn-outline-danger"><a href="paraLogin">Login Admin</a></button>
                        </form>
                    </div>

</center>
{include file="footer.tpl"}
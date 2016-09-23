
  <div class="container">
  <p id="profile-name" class="profile-name-card" ><h1 align="center">Entrada/Salida</h1></p>
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="<?php echo base_url();?>assets/img/avatar.png" />
            <form  action="<?php echo base_url();?>centradasalida/ingresar" method="post" accept-charset="utf-8" class="login" name="txtusuario" autocomplete="off" role="form" class="form-signin">
                <input class="form-control" placeholder="Usuario" name="txtuser" type="text" value="" autofocus="" required>
                <input class="form-control" placeholder="Contraseña" name="txtpass" type="password"  value="" autocomplete="off" required>
                <br>
                <input type="submit" value="Ingresar" class="btn btn-lg btn-success- btn-block btn-signin">
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
  
</div>
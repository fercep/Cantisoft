<div id="back"></div>

<div class="login-box">

  <div class="login-logo">

    <a href="#"><b>CANTISOFT</b></a>

  </div>

  <!-- /.login-logo -->

  <div class="login-box-body">

    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <!--<div class="col-xs-8">

          <div class="checkbox icheck">

            <label>

              <input type="checkbox"> Remember Me
            </label>

          </div>

        </div>

         -->

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

        </div>

      </div>
      
      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();

    
      ?>

    </form>

    <!--<div class="social-auth-links text-center">

      <p>- OR -</p>

      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>

      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>

    </div>

    /.social-auth-links 

    <a href="#">I forgot my password</a><br>

    <a href="register.html" class="text-center">Register a new membership</a>

    -->

  </div>

</div>
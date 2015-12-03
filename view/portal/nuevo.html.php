<?php include $fsConfig->getPath() . 'view/parcial/head.php'; ?>
<div class="container">

  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form role="form" method="post" action="<?php echo $fsConfig->getUrl() . 'index.php/portal/registrar'?>">
        <h2>Por favor Registrate</h2>
        <hr class="colorgraph">
        <legend>Usuario</legend>
        <div class="form-group">
          <input type="text" autocomplete="off" name="registro[usu_usuario]" id="usuario" class="form-control input-lg" placeholder="Nombre Usuario" tabindex="3">
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="password" autocomplete="off" name="registro[usu_password]" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="5">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="password" autocomplete="off" name="registro[usu_password1]" id="password1" class="form-control input-lg" placeholder="Confirme Contraseña" tabindex="6">
            </div>
          </div>
        </div>
        <hr>
        <legend>Datos Del Usuario</legend>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="text" autocomplete="off" name="registro[dus_nombre]" id="nombre" class="form-control input-lg" placeholder="Nombres" tabindex="1">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="text" autocomplete="off" name="registro[dus_apellidos]" id="apellido" class="form-control input-lg" placeholder="Apellidos" tabindex="2">
            </div>
          </div>
        </div>
        <div class="form-group">
          <input type="email" autocomplete="off" name="registro[dus_correo]" id="correo" class="form-control input-lg" placeholder="Email " tabindex="4">
        </div>
        <div class="row">
          <div class="col-xs-4 col-sm-3 col-md-3">
            <span class="button-checkbox">
              <label>Acepto</label>
              <input type="checkbox" name="t_and_c" id="t_and_c" value="1">
            </span>
          </div>
          <div class="col-xs-8 col-sm-9 col-md-9">
            Al hacer click en <strong class="label label-primary">Registrar</strong>,Usted estara de acuerdo con los <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terminos y condiciones</a>
          </div>
        </div>

        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-12 col-md-6"><input type="submit" value="Registrar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
          <div class="col-xs-12 col-md-6"><a href=" <?php echo $fsConfig->getUrl() ?>index.php/seguridad/iniciar" class="btn btn-success btn-block btn-lg">Iniciar sesion</a></div>
        </div>
      </form>
    </div>
  </div>



  <?php include $fsConfig->getPath() . 'view/parcial/foot.php'; ?>

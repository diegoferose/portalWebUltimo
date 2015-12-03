<?php include $fsConfig->getPath() . 'view/parcial/head.php'; ?>

<div class="container">

  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form role="form" method="post" action="<?php echo $fsConfig->getUrl() . 'index.php/seguridad/login' ?>">
        <fieldset>
          <h2>Inicia Sesion</h2>
          <hr class="colorgraph">
          <div class="form-group">
            <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Ingresa Email">
          </div>
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña">
          </div>
          <span class="button-checkbox">
            <label>Recuerdame</label>
            <input type="checkbox" name="remember_me" id="remember_me" checked="checked">
            <a href="" class="btn btn-link pull-right">Olvidaste Tu Contraseña?</a>
          </span>
          <hr class="colorgraph">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" class="btn btn-lg btn-success btn-block" value="Iniciar Sesion">
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
              <a href="<?php echo $fsConfig->getUrl() ?>index.php/portal/nuevo" class="btn btn-lg btn-primary btn-block">Registrar</a>
            </div>
          </div>
        </fieldset>
        <?php if (isset($_SESSION['registroSuccess']) === true): ?>
          <br>
          <div class="alert alert-success" role="alert"><?php echo $_SESSION['registroSuccess'] ?></div>
          <?php unset($_SESSION['registroSuccess']) ?>
        <?php endif; ?>
      </form>
    </div>
  </div>

</div>



<?php include $fsConfig->getPath() . 'view/parcial/foot.php'; ?>

<?php include $fsConfig->getPath() . 'view/parcial/head.php'; ?>

  <!-- Navegación -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- icono mostrado en modo móvil-->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#click-movil">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!--      titulo del nav-->
        <a class="navbar-brand page-scroll" href="<?php echo $fsConfig->getUrl() ?>index.php/portal/index">Guadalajara de Buga</a>
      </div>

      <!-- Contenido del navbar -->
      <div class="collapse navbar-collapse" id="click-movil">
        <ul class="nav navbar-nav navbar-right">
          <!--        buscador-->
          <li class="btn-search active">
            <form action="" class="nav navbar-form" role="search">
              <div>
                <input type="search" class="form-control" placeholder="Buscar...">
                <span  class="fa fa-search visible-lg-inline-block"></span>   
              </div>
            </form>
          </li>

          <li>
            <a class="page-scroll" href="<?php echo $fsConfig->getUrl() ?>index.php/portal/sitios">Sitios</a>
          </li>

          <li>
            <a href="">Registrate</a>
          </li>

          <!--        iniciar sesion-->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle page-scroll" data-toggle="dropdown"><b>Iniciar sesion</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-md-12">

                    Inicia con :
                    <div id="social-botones">
                      <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="btn btn-gg"><i class="fa fa-google-plus"></i></a>
                    </div>

                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">

                      <div class="form-group ">
                        <label class="sr-only " for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" placeholder="Ingresa Correo" required>
                      </div>

                      <div class="form-group">
                        <label class="sr-only" for="pass">Contraseña</label>
                        <input type="password" class="form-control" id="pass" placeholder="Ingresa Contraseña" required>

                        <div class="help-block text-right"><a href="" id="text-social">Olvidaste Tu Contraseña ?</a></div>
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Iniciar sesion</button>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Recuerdame
                        </label>
                      </div>
                    </form>
                  </div>
                  <div class="bottom text-center">
                    Nuevo Aqui ? <a href="#" id="text-social"><b>Registrate</b></a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Carrusel -->
  <div class="carrusel">
    <div class="col-md-12">
      <div id="carousel-1" class="carousel slide" data-ride="carousel">
        <!--        indicadores-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-1" data-slide-to="1" ></li>
          <li data-target="#carousel-1" data-slide-to="2"></li>
        </ol>
        <!--        contenedor de los slides-->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img id="banner" src='<?php echo $fsConfig->getUrl() ?>pictures/fondo4-a.jpg' class="img-responsive">
            <div class="carousel-caption">
              <h3> Navega Por Nuestras Distintas Categorias</h3>
            </div>
          </div>

          <div class="item">
            <img id="banner" src='<?php echo $fsConfig->getUrl() ?>pictures/fondo4-b.jpg' class="img-responsive">
            <div class="carousel-caption">
              <h3> Desde Ecoturismo Hasta Gastronomia</h3>
            </div>
          </div>


          <div class="item">
            <img id="banner" src='<?php echo $fsConfig->getUrl() ?>pictures/fondo4-c.jpg' class="img-responsive">
            <div class="carousel-caption">
              <h3> Terminando Con Nuestros Parajes Mas Hermosos!</h3>
            </div>
          </div>
        </div>

      </div>

      <!--      controles-->
      <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
        <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
        <span aria-hidden="true"><i class="fa fa-angle-right" ></i></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>


  <!-- Sección Eventos-->
  <section id="evento" class="bg-light-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Categorias</h2>
          <h3 class="section-subheading text-muted">Todas Las Categorias</h3>
        </div>
      </div>


      <div class="row">

        <!-- eventos Modal 1 -->
        <div class="col-md-4 col-sm-6 evento-item">
          <a href="<?php echo $fsConfig->getUrl() ?>index.php/categoria/cultura" class="evento-link" data-toggle="modal">
            <div class="evento-hover">
              <div class="evento-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="<?php echo $fsConfig->getUrl() ?>pictures/teatro.jpg" class="img-responsive" alt="">
          </a>
          <div class="evento-caption">
            <h4>Cultura y Tradicion</h4>
            <p class="text-muted">Descripcion Descripcion  Descripcion  Descripcion  Descripcion </p>
          </div>
        </div>

        <!-- eventos Modal 2 -->
        <div class="col-md-4 col-sm-6 evento-item">
          <a href="#eventoModal2" class="evento-link" data-toggle="modal">
            <div class="evento-hover">
              <div class="evento-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="<?php echo $fsConfig->getUrl() ?>pictures/catDeporte.jpg" class="img-responsive" alt="">
          </a>
          <div class="evento-caption">
            <h4>Deporte</h4>
            <p class="text-muted">Descripcion Descripcion Descripcion Descripcion Descripcion </p>
          </div>
        </div>



        <!-- eventos Modal 5 -->
        <div class="col-md-4 col-sm-6 evento-item">
          <a href="#eventoModal5" class="evento-link" data-toggle="modal">
            <div class="evento-hover">
              <div class="evento-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="<?php echo $fsConfig->getUrl() ?>pictures/catEcoturismo.jpg" class="img-responsive" alt="">
          </a>
          <div class="evento-caption">
            <h4>Ecoturismo</h4>
            <p class="text-muted">Descripcion Descripcion Descripcion Descripcion Descripcion </p>
          </div>
        </div>



        <!-- eventos Modal 1 -->
        <div class="col-md-4 col-sm-6 evento-item">
          <a href="#eventoModal1" class="evento-link" data-toggle="modal">
            <div class="evento-hover">
              <div class="evento-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="<?php echo $fsConfig->getUrl() ?>pictures/catEntretenimiento.jpg" class="img-responsive" alt="">
          </a>
          <div class="evento-caption">
            <h4>Entretenimiento</h4>
            <p class="text-muted">Descripcion Descripcion Descripcion Descripcion Descripcion </p>
          </div>
        </div>

        <!-- eventos Modal 2 -->
        <div class="col-md-4 col-sm-6 evento-item">
          <a href="#eventoModal2" class="evento-link" data-toggle="modal">
            <div class="evento-hover">
              <div class="evento-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="<?php echo $fsConfig->getUrl() ?>pictures/catHistorico.jpg" class="img-responsive" alt="">
          </a>
          <div class="evento-caption">
            <h4>Historico</h4>
            <p class="text-muted">Descripcion Descripcion Descripcion Descripcion Descripcion </p>
          </div>
        </div>



        <!-- eventos Modal 5 -->
        <div class="col-md-4 col-sm-6 evento-item">
          <a href="#eventoModal5" class="evento-link" data-toggle="modal">
            <div class="evento-hover">
              <div class="evento-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="<?php echo $fsConfig->getUrl() ?>pictures/catReligioso.jpg" class="img-responsive" alt="">
          </a>
          <div class="evento-caption">
            <h4>Religioso</h4>
            <p class="text-muted">Descripcion Descripcion Descripcion Descripcion Descripcion </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Pie de página-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <span class="copyright">Contactanos En Redes Sociales</span>
        </div>
        <div class="col-md-6">
          <ul class="list-inline social-buttons">
            <li><a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-google"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
<?php include $fsConfig->getPath() . 'view/parcial/foot.php'; ?>

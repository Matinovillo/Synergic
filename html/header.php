
  <!--Header-->
  <?php

    if(isset($_COOKIE["usuario"])){
      $logeado = "<a href='#'><i class='fas fa-user'></i>" .$_COOKIE["usuario"] ."</a>";
      $cerrarSesion = "<div class='up-item'><a href='./login.php'><i class='fas fa-sign-out-alt'></i>Cerrar Sesión</a></div>";
    }else{
      $logeado = "<a href='./login.php'><i class='fas fa-user'></i>Ingresar</a>";
      $cerrarSesion = "";
    }
      session_start();
      var_dump($_SESSION);
    ?>
  <header>
    <div class="container">
      <div class="row header-row">
        <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 h-logo">
          <a href="index.php" class="logo-img">
            <img src="../img/logo.png" alt="">
          </a>
        </div>
        <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-xs-12">
          <form class="form-inline">
            <input class="form-control mr-sm-2 inpt" type="search" placeholder="Search" aria-label="Search">
            <button class="btn src-btn" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-xs-12 text-right text-sm-center">
          <div class="user-panel">
            <div class="up-item">
              <?=$logeado?>
              <!--<a href="./login.php">
                <i class="fas fa-user"></i>
                Ingresar
              </a>-->
            </div>
            <?=$cerrarSesion?>
            <div class="up-item">
              <div class="shopping-card">
                <span>0</span>
                <a href="shop cart.php">
                <i class="fas fa-shopping-cart"></i>
                 Carrito de compras
              </a>
            </div>
            </div>
          </div>
        </div>
      </div>
  </header>
  <!--/Header-->

  <!--Modal Login-->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <div class="page">
            <div class="contenido-login">
              <div class="envolver-login">
                <form class="formulario-login">
                  <a href="index.php" class="logo-img m-auto">
                    <img src="../img/logo.png" alt="">
                  </a>
                  <div class="formulario-campos">
                    <input class="campos" type="text" name="user" placeholder="Usuario">
                    <span class="focus-campo"></span>
                    <span class="simbolo-campo">
                      <span><i class="far fa-user"></i></span>
                    </span>
                  </div>

                  <div class="formulario-campos">
                    <input class="campos" type="password" name="pass" placeholder="Contraseña">
                    <span class="focus-campo"></span>
                    <span class="simbolo-campo">
                      <span><i class="fas fa-lock"></i></span>
                    </span>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label chck-bx" for="customCheck1">Recuerdame</label>
                  </div>

                  <div class="contenidod-login-formulario-btn">
                    <button class="login-formulario-btn">
                      Iniciar Sesión
                    </button>
                  </div>

                  <div class="text-center w-full no-acount">
                    <a href="#">
                      ¿Olvidaste tu contraseña?
                    </a>
                  </div>

                  <a href="#" class="btn-face">
                    <i class="fab fa-facebook"></i>
                    Facebook
                  </a>

                  <a href="#" class="btn-google">
                    <img src="../img/icon-google.png" alt="Google">
                    Google
                  </a>

                  <div class="text-center w-full no-acount">
                    <span class="txt1">
                      ¿No tienes una cuenta?
                    </span>

                    <a class="register" href="Register form.php">
                      Regístrate
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/Modal Login-->

  <!--Nav Menu-->
  <nav class="menu" id="menu">
    <div class="contenedor contenedor-botones-menu">
      <button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
      <button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
    </div>

    <div class="contenedor contenedor-enlaces-nav">
      <div class="btn-departamentos" id="btn-departamentos">
        <p id="cat-title">Todas las <span>Categorias</span></p>
        <i class="fas fa-caret-down"></i>
      </div>

      <div class="enlaces">
        <a href="index.php">Home</a>
        <a href="contact.php">Contacto</a>
        <a href="user-profile.php">Cuenta</a>
        <a href="F.a.q.php">F.A.Q</a>
      </div>
    </div>

    <div class="contenedor contenedor-grid">
      <div class="grid" id="grid">
        <div class="categorias">
          <button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
          <h3 class="subtitulo">Categorias</h3>

          <a href="productos.php" data-categoria="componentes-de-pc">Productos<i class="fas fa-angle-right"></i></a>
          <a href="#" data-categoria="pc-de-escritorio">PC de escritorio <i class="fas fa-angle-right"></i></a>
          <a href="#" data-categoria="monitores">Monitores <i class="fas fa-angle-right"></i></a>
          <a href="#" data-categoria="perifericos">Perifericos <i class="fas fa-angle-right"></i></a>
        </div>

        <div class="contenedor-subcategorias">
          <div class="subcategoria " data-categoria="componentes-de-pc">
            <div class="enlaces-subcategoria">
              <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
              <h3 class="subtitulo">Productos</h3>
              <a href="#">Procesadores</a>
              <a href="#">Motherboards</a>
              <a href="#">Memoria RAM</a>
              <a href="#">Placas de video</a>
              <a href="#">Hard Disk</a>
            </div>

            <div class="banner-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>

            <div class="galeria-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>
          </div>


          <div class="subcategoria" data-categoria="pc-de-escritorio">
            <div class="enlaces-subcategoria">
              <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
              <h3 class="subtitulo">PC de escritorio</h3>
              <a href="#">AMD</a>
              <a href="#">INTEL</a>
            </div>

            <div class="banner-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>

            <div class="galeria-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>
          </div>


          <div class="subcategoria" data-categoria="monitores">
            <div class="enlaces-subcategoria">
              <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
              <h3 class="subtitulo">Monitores</h3>
              <a href="#">Acer</a>
              <a href="#">LG</a>
              <a href="#">Samsung</a>
              <a href="#">Philips</a>
            </div>

            <div class="banner-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>

            <div class="galeria-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>
          </div>

          <div class="subcategoria" data-categoria="perifericos">
            <div class="enlaces-subcategoria">
              <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
              <h3 class="subtitulo">Perifericos</h3>
              <a href="#">Teclados</a>
              <a href="#">Mouses</a>
              <a href="#">Auriculares</a>
              <a href="#">Microfonos</a>
              <a href="#">Webcam</a>
            </div>

            <div class="banner-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>

            <div class="galeria-subcategoria">
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
              <a href="#">
                <img src="https://via.placeholder.com/300x300" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!--/Nav Menu-->


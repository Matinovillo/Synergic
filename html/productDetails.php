<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Font Awesome icons CSS-->
  <link rel="stylesheet" href="../fonts/css webfont/all.min.css">

  <!-- Secciones CSS-->
  
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/navmenu.css">
  <link rel="stylesheet" href="../css/productDetails.css">
  <link rel="stylesheet" href="../css/styles.css">

  <title>Synergic || Tienda tecno</title>
</head>

<body>
  <!--Header-->
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

              <a data-toggle="modal" data-target="#exampleModalLong">
              <i class="fas fa-user"></i>
                Ingresar
              </a>
            </div>
            <div class="up-item">
              <a href="shop cart.php">
                  <i class="fas fa-shopping-cart"></i>
                  Carrito de compras     
              </a>
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
        <div class="modal-body">
          <div class="page">
            <div class="contenido-login">
              <div class="envolver-login">
                <form class="formulario-login">
                  <a href="index.php" class="logo-img m-auto mb-5">
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

                  <div class="formulario-campos">
                    <input class="campo-checkbox" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox" for="ckb1">
                      Recuérdame
                    </label>
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

  <!--Product Details-->
  <section class="section_page shoppingProducts container">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 contentProductShopping col-cont">
          <form name="cart_quantity" method="post">
            <div class="title_section_summary text-center" style="margin-bottom: 40px">
              Notebook HP 245 G7 Ryzen 3 2200U 4G 1Tb 14" Free
            </div>
            <div class="row">
              <div class="col-sm-3 contenido-centrado-imgs">
                <div class="contentImageShoppingImgs">
                  <img src="https://www.venex.com.ar/products_images/1575916726_assswe.png"
                    alt="Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb)"
                    title=" Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb) " width="100" height="100">
                </div>
                <div class="contentImageShoppingImgs">
                  <img src="https://www.venex.com.ar/products_images/1575916726_assswe.png"
                    alt="Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb)"
                    title=" Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb) " width="100" height="100">
                </div>
                <div class="contentImageShoppingImgs">
                  <img src="https://www.venex.com.ar/products_images/1575916726_assswe.png"
                    alt="Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb)"
                    title=" Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb) " width="100" height="100">
                </div>
                <div class="contentImageShoppingImgs">
                  <img src="https://www.venex.com.ar/products_images/1575916726_assswe.png"
                    alt="Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb)"
                    title=" Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb) " width="100" height="100">
                </div>
              </div>
              <div class="col-sm-9 contenido-centrado">
                <div id="carouselExampleControls" class="carousel slide contentImageShopping" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://www.venex.com.ar/products_images/1575916726_assswe.png"
                        alt="Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb)"
                        title=" Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb) " width="100" height="100">
                    </div>
                    <div class="carousel-item">
                      <img src="https://www.venex.com.ar/products_images/1575916726_assswe.png"
                        alt="Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb)"
                        title=" Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb) " width="100" height="100">
                    </div>
                    <div class="carousel-item">
                      <img src="https://www.venex.com.ar/products_images/1575916726_assswe.png"
                        alt="Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb)"
                        title=" Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb) " width="100" height="100">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="fa fa-chevron-circle-left  carousel-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="fa fa-chevron-circle-right carousel-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 content_cart_order_totals col-cont">
          <div class="contentTotals">
            <div class="text-center order-total-out">
              $26990
            </div>
            <div class="padding-col quote-col modal-col" style="padding-right: 0">
              <div class="modal-container" href="_metodosPagoMP.php?price=26990&amp;hide_comodities_button=true"
                tabindex="-1" rel="modalOpenPage" data-toggle="modal" data-target="#paymentMethodsMP"
                style="cursor: pointer;">
                <div class="modal-detail-display payment-method">
                  <div class="theme-icon">
                    <div class="container-icon">
                      <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="theme-text">
                    <div class="title">PAGÁ EN MUCHAS CUOTAS</div>
                    <div>calculá tu cuota y forma de pago</div>
                  </div>
                  <div class="access-icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
            <div class="padding-col modal-col">
              <div class="modal-container" href="sending_methods_modal.php" tabindex="-1" rel="modalOpenPage"
                data-toggle="modal" data-target="#sendingMethods" style="cursor: pointer;">
                <div class="modal-detail-display payment-method">
                  <div class="theme-icon">
                    <div class="container-icon">
                      <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="theme-text">
                    <div class="title">RECIBÍ TU PRODUCTO</div>
                    <div>seleccioná la forma de entrega</div>
                  </div>
                  <div class="access-icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>

            <div class="buttonAction text-center action-shopping-cart">
              <a id="tdb1" href="#">
                <span class="btn ">
                  Comprar
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Product Details-->

  <!--Footer-->
  <section class="footer-section shadow-lg">
    <div class="container">
      <div class="footer-logo text-center p-4">
        <a href="index.php" class="logo-img">
          <img src="../img/logo.png" alt="">
        </a>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>About</h2>
            <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla
              faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
            <img src="../img/cards.png" alt="">
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Lorem</h2>
            <ul class="ul1">
              <li><a href="">Nosotros</a></li>
              <li><a href="">Pedidos</a></li>
              <li><a href="">Devoluciones</a></li>
              <li><a href="">Trabajos</a></li>
            </ul>
            <ul>
              <li><a href="">Envios</a></li>
              <li><a href="">Terminos de uso</a></li>
              <li><a href="">Clientes</a></li>
              <li><a href="">Soporte</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Lorem</h2>
            <div class="fw-latest-post-widget">
              <div class="lp-item">
                <div class="lp-thumb set-bg"><img src="https://via.placeholder.com/68X68?text=68x68" alt=""></div>
                <div class="lp-content">
                  <h6>lorem ipsum sit dolor</h6>
                  <span>Dic 7, 2019</span>
                  <a href="#" class="readmore">Read More</a>
                </div>
              </div>
              <div class="lp-item">
                <div class="lp-thumb set-bg"><img src="https://via.placeholder.com/68X68?text=68x68" alt=""></div>
                <div class="lp-content">
                  <h6>lorem ipsun sit dolor</h6>
                  <span>Dic 7, 2019</span>
                  <a href="#" class="readmore">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget contact-widget">
            <h2>Lorem</h2>
            <div class="con-info">
              <span>C.</span>
              <p>Nuestra empresa</p>
            </div>
            <div class="con-info">
              <span>B.</span>
              <p>1481 Lorem ipsum dolor amet, Argentina, Cordoba. </p>
            </div>
            <div class="con-info">
              <span>T.</span>
              <p>+54 351 921 0101</p>
            </div>
            <div class="con-info">
              <span>E.</span>
              <p>Empresa@Gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-links-warp">
      <div class="container">
        <div class="social-links">
          <a href="" class="instagram"><i class="fab fa-instagram"></i></i><span>instagram</span></a>
          <a href="" class="google-plus"><i class="fab fa-google-plus-g"></i><span>g+plus</span></a>
          <a href="" class="pinterest"><i class="fab fa-pinterest"></i><span>pinterest</span></a>
          <a href="" class="facebook"><i class="fab fa-facebook"></i><span>facebook</span></a>
          <a href="" class="twitter"><i class="fab fa-twitter"></i><span>twitter</span></a>
          <a href="" class="youtube"><i class="fab fa-youtube"></i><span>youtube</span></a>
          <a href="" class="tumblr"><i class="fab fa-tumblr-square"></i><span>tumblr</span></a>
          <p class="text-white text-center mt-5">Copyright &copy; Todos los derechos reservados | Synergic</p>
        </div>
      </div>
    </div>

  </section>
  <!--/Footer-->

















  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="../main.js"></script>
</body>

</html>
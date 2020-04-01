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
  <link rel="stylesheet" href="/fonts/css webfont/all.min.css">

  <!-- Secciones CSS-->
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/login.css">
  <link rel="stylesheet" href="/css/navmenu.css">

  <title>Synergic || Tienda tecno</title>
</head>
<body>
  
  
   <!-- Top Bar -->
  <div class="top_bar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12 d-flex ">
          <div class="top_bar_contact_item ">
            <i class="fas fa-mobile-alt top-bar-icon"></i>
            +54 351 921 0101
          </div>
          <div class="top_bar_contact_item">
            <i class="fas fa-envelope top-bar-icon"></i>
            <a href="Synergic@gmail.com">Synergic@gmail.com</a>
          </div>
          
          
          <div class="top_bar_content ml-auto">
            @if (Route::has('login'))
            <div class="top_bar_user">
              @auth
              <div>
                <a href="{{ url('') }}">
                  <i class='fas fa-user mr-2 top-bar-icon'></i>Bienvenido! {{ Auth::user()->email }}
                </a>
                </div>
              <span> | </span>
              
              
              
              <div>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                   <i class='fas fa-sign-out-alt mr-2 top-bar-icon'></i> {{ __('Cerrar Sesion') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
             
            
            
            @else
              <a href="{{ route('login') }}"><i class='fas fa-user mr-2 top-bar-icon'></i>Ingresar</a>
              <span> | </span>
              @if (Route::has('register'))
                  <a href="{{ route('register') }}">Registrate</a>
              @endif
              @endauth
          </div>
        @endif
            
         
         
         
         
         
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Top Bar -->


  <!-- header -->
  <header>
    <div class="container">
      <div class="row header-row">
        <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 h-logo">
          <a href="/" class="logo-img">
            <img src="../img/logo.png" alt="">
          </a>
        </div>
        <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12 col-xs-12">
          <form class="form-inline">
            <input class="form-control mr-sm-2 inpt" type="search" placeholder="Search" aria-label="Search">
            <button class="btn src-btn" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 p-0 text-center">
          <div class="user-panel">
            <div class="up-item">
              <div class="shopping-card">
                <span>0</span>
                <a href="shop cart.php">
                  <i class="fas fa-shopping-cart"></i>
                  Carrito de compras
                </a>
              </div>
            </div>
            <div class="up-item ml-xl-5 ml-3 ml-md-5">
              <div class="shopping-card">
                <a href="#">
                <i class="fas fa-heart"></i>
                Productos favoritos
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </header>
  <!--/Header-->


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
        <a href="/">Home</a>
        <a href="contact.php">Contacto</a>
        {{-- si el usuario loguea se muestra cuenta --}}
        @if (Route::has('login'))
          @auth
          <a href="/cuenta">Cuenta</a>
          @endauth
        @else
        
        @endif
        <a href="F.a.q.php">F.A.Q</a>
      </div>
    </div>

    <div class="contenedor contenedor-grid">
      <div class="grid" id="grid">
        <div class="categorias">
          <button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
          <h3 class="subtitulo">Categorias</h3>

          <a href="productos.php" data-categoria="componentes-de-pc">Componentes de PC<i class="fas fa-angle-right"></i></a>
          <a href="#" data-categoria="pc-de-escritorio">PC de escritorio <i class="fas fa-angle-right"></i></a>
          <a href="#" data-categoria="notebooks">Notebooks <i class="fas fa-angle-right"></i></a>
          <a href="#" data-categoria="monitores">Monitores <i class="fas fa-angle-right"></i></a>
          <a href="#" data-categoria="perifericos">Perifericos <i class="fas fa-angle-right"></i></a>
        </div>

        <div class="contenedor-subcategorias">
          <div class="subcategoria " data-categoria="componentes-de-pc">
            <div class="enlaces-subcategoria">
              <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
              <h3 class="subtitulo">Componentes de PC</h3>
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

          <div class="subcategoria" data-categoria="notebooks">
            <div class="enlaces-subcategoria">
              <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
              <h3 class="subtitulo">Notebooks</h3>
              <a href="#">Acer</a>
              <a href="#">Lenovo</a>
              <a href="#">Asus</a>
              <a href="#">HP</a>
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

  {{-- content --}}
      <div class="mb-5">
        @yield("contenido")
      </div>
  {{-- /content --}}




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
      <div class="social-links text-center">
        <a href="" class="instagram"><i class="fab fa-instagram"></i></i><span>instagram</span></a>
        <a href="" class="facebook"><i class="fab fa-facebook"></i><span>facebook</span></a>
        <a href="" class="twitter"><i class="fab fa-twitter"></i><span>twitter</span></a>
        <a href="" class="youtube"><i class="fab fa-youtube"></i><span>youtube</span></a>
      <div class="mt-4">
        <small class="text-white text-center">Copyright &copy; Todos los derechos reservados | Synergic</small>
      </div>
      </div>
    </div>
  </div>
</section>
<!--/Footer-->




  <!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
  crossorigin="anonymous"></script>
  
  
  
  {{-- main js --}}
  <script src="/js/main.js"></script>

</body>
</html>


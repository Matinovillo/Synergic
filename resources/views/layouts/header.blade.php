
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
          <a href="index.php">Home</a>
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

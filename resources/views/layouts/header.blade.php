
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
                @guest
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                  <form class="form-inline">
                    <input class="form-control mr-sm-2 inpt" type="search" placeholder="Eso que querés.. buscalo acá" aria-label="Search">
                    <button class="btn src-btn" type="submit"><i class="fas fa-search"></i></button>
                  </form>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12" style="font-size: x-large;font-weight: bold;">
                  ¡Bienvenido!
                  <span class="fa fa-grin-tongue-wink"></span>
                </div>
                @endguest

          @if (Route::has('login'))
            @auth
                <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                  <form class="form-inline">
                    <input class="form-control mr-sm-2 inpt" type="search" placeholder="Eso que querés.. buscalo acá" aria-label="Search">
                    <button class="btn src-btn" type="submit"><i class="fas fa-search"></i></button>
                  </form>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 p-0 text-center">
                  <div class="user-panel">
                    <div class="up-item">
                      <div class="shopping-card">
                        <span>{{ $cantidad ?? '' }}</span>
                          <a href="/carrito">
                            <i class="fas fa-shopping-cart"></i>
                              Carrito de compras
                          </a>
                      </div>
                    </div>
                    <div class="up-item ml-xl-5 ml-3 ml-md-5">
                      <div class="shopping-card">
                        <a href="/productosFavoritos">
                          <i class="fas fa-heart"></i>
                          Productos favoritos
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
            @endauth
          @else
                
          @endif

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
          <a href="/">Inicio</a>
          <a href="/productos">Productos</a>
          <a href="/contacto">Contacto</a>
          {{-- si el usuario loguea se muestra cuenta --}}
          @if (Route::has('login'))
            @auth
            <a href="/cuenta">Cuenta</a>
            @endauth
          @else
          
          @endif
          <a href="/faq">F.A.Q</a>
        </div>
      </div>

      <div class="contenedor contenedor-grid">
        <div class="grid" id="grid">
          <div class="categorias">
            <button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
            <h3 class="subtitulo">Categorias</h3>
             @foreach($categorias as $categoria)
                <a href="productos.php" data-categoria="{{$categoria->id}}">{{$categoria->nombre}}<i class="fas fa-angle-right"></i></a>
             @endforeach
          </div>
            
          <div class="contenedor-subcategorias">
            
                  @foreach($categorias as $categoria)
                  <div class="subcategoria " data-categoria="{{$categoria->id}}">
                    <div class="enlaces-subcategoria">
                      <!--<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>-->
                      <h3 class="subtitulo">{{$categoria->nombre}}</h3>
                          @foreach ($categoria->subcategorias as $childCategory)
                              <a href="#">{{$childCategory->nombre }}</a>
                          @endforeach
                    </div>
                   </div>
                  @endforeach
          </div>
        </div>
      </div>
    </nav>

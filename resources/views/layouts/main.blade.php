<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @yield('token')

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Font Awesome icons CSS-->
  <link rel="stylesheet" href="/fonts/css webfont/all.min.css">

  {{-- owlcarousel --}}
  <link rel="stylesheet" href="/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="/owl/owl.theme.default.min.css">
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
                @can('administrar')
                <a href="{{ route('admin.page') }}">
                  <i title="Admin page" class='fas fa-cogs mr-2 top-bar-icon'></i> <b
                    class="admin_page">Administracion</b>
                </a>
                @endcan
              </div>
              <span> | </span>
              <div>
                <a href="{{ url('/cuenta/datospersonales') }}">
                  <i class='fas fa-user mr-2 top-bar-icon'></i>Bienvenido! {{ Auth::user()->nombre }}
                </a>
              </div>
              <span> | </span>
              <div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                  <input class="main-logout-input bg-white" type="submit" value="Cerrar sesion">
                  <i class='fas fa-sign-out-alt mr-2 top-bar-icon'></i>
                </form>
              </div>
              @else
              {{-- <a href="{{ route('login') }}"><i class='fas fa-user mr-2 top-bar-icon'></i>Ingresar</a> --}}
              <!-- Button trigger modal -->
              <button type="button" class="login-button" data-toggle="modal" data-target="#LoginModal">
                <i class='fas fa-user mr-2 top-bar-icon'></i>Ingresar
              </button>


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
          <form class="form-inline" method="GET" action="{{ url('productos')}}">
            <input class="form-control mr-sm-2 inpt" type="search" placeholder="Buscar productos" aria-label="Search"
              name="search">
            <button class="btn src-btn text-muted" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 p-0 text-center">
          <div class="user-panel">
            <div class="up-item">
              <div class="shopping-card">
                @if (Route::has('login'))
                @auth
                <span>{{\Cart::session(auth()->id())->getContent()->count()}}</span>
                @else
                <span>0</span>
                @endauth
                @endif
                <a href="{{route('cart')}}" class="@if(Route::has('login')) @auth {{''}}  @else {{ "addtocart" }} @endauth @endif">
                  <i class="fas fa-shopping-cart"></i>
                  Carrito de compras
                </a>
              </div>
            </div>
            <div class="up-item ml-xl-5 ml-3 ml-md-5">
              <div class="shopping-card">
                <a href="{{ url('cuenta/misfavoritos')}}" class="@if(Route::has('login')) @auth {{''}}  @else {{ "addtocart" }} @endauth @endif">
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
        <a href="/productos">Productos</a>
        <a href="/">Home</a>
        <a href="{{url('contacto')}}">Contacto</a>
        {{-- si el usuario loguea se muestra cuenta --}}
        @if (Route::has('login'))
        @auth
        <a href="{{url('/cuenta/datospersonales')}}">Cuenta</a>
        @endauth
        @else
        @endif
        <a href="{{ url('/FAQ') }}">F.A.Q</a>
      </div>
    </div>

    <div class="contenedor contenedor-grid">
      <div class="grid" id="grid">
        <div class="categorias">
          <button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
          <h3 class="subtitulo">Categorias</h3>
          @foreach($categorias as $categoria)
          {{-- {{route('productosPorCategoria', str_replace(" ", "+", $categoria->nombre))}} --}}
          <a href="#" data-categoria="{{$categoria->id}}">{{$categoria->nombre}}<i class="fas fa-angle-right"></i></a>
          @endforeach
        </div>
        <div class="contenedor-subcategorias">
          @foreach($categorias as $categoria)
          <div class="subcategoria " data-categoria="{{$categoria->id}}">
            <div class="enlaces-subcategoria">
              <!--<button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>-->
              <h3 class="subtitulo">{{$categoria->nombre}}</h3>
              @foreach ($categoria->hijas as $subCategoria)
              <a
                href="{{route('productosPorCategoria', str_replace(" ", "+", $subCategoria->nombre))}}">{{$subCategoria->nombre }}</a>
              @endforeach
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </nav>
  <!--/Nav Menu-->

  {{-- content --}}
  <div class="mb-5 index-content">
    @yield("contenido")
  </div>
  {{-- /content --}}




  <!--Footer-->
  <footer class="main-footer">
    <div class="container">
      <div class="row pb-xl-5">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 logo-img text-center mb-4">
          <img src="/img/logo.png" alt="">
          <small class="d-block mb-3 text-muted">&copy; 2019-2020</small>
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
          <h5><i class="fas fa-phone mr-3"></i>Atencion al cliente</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Synergic@gmail.com</a></li>
            <li><a class="text-muted" href="#">54 351 921 0101</a></li>
            <li><a class="text-muted" href="#">492 1111</a></li>
          </ul>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <h5><i class="fas fa-map-marker-alt mr-3"></i> Visitanos</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">1481 Lorem ipsum dolor amet | B° Lorem ipsum</a></li>
            <li><a class="text-muted" href="#">Córdoba | Argentina</a></li>
            <li><a class="text-muted" href="#">Lunes a viernes 09:00 a 13:00 - 17:00 a 21:00</a></li>
          </ul>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <h5><i class="fas fa-credit-card mr-3"></i>Pagos</h5>
          <p class="text-muted">Con mercado pago, paga de la forma que quieras</p>
          <img src="/img/mp-logo.png" class="compra-img" alt="">
          <img src="../img/cards.png" alt="">
        </div>
        <div class="col-xl-1 col-lg-1 col-md-6 col-sm-12 col-xs-12 ">
          <ul class="list-unstyled text-small nav-footer">
            <li><a class="text-muted" href="#">Home</a></li>
            <li><a class="text-muted" href="#">Productos</a></li>
            <li><a class="text-muted" href="#">Contacto</a></li>
            <li><a class="text-muted" href="#">FAQ</a></li>
          </ul>
        </div>

      </div>
    </div>
    <div class="social-links-warp">
      <div class="container">
        <div class="social-links text-center">
          <a href="" class="instagram"><i class="fab fa-instagram"></i></i><span>instagram</span></a>
          <a href="" class="facebook"><i class="fab fa-facebook"></i><span>facebook</span></a>
          <a href="" class="twitter"><i class="fab fa-twitter"></i><span>twitter</span></a>

        </div>
      </div>
    </div>
  </footer>

  


  <!-- Modal -->

  <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModal">Iniciar sesion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <a href="/">
              <img src="../img/logo.png" class="login-img" alt="">
            </a>
          </div>
            <div class="contenido-login">
              <div class="envolver-login">
                <form id="formulario-iniciar-sesion">
                  @csrf
                  <div class="alert alert-danger alert-dismissible fade show d-none" role="alert" id="validateError">
                    <p></p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  {{-- Input email --}}
                  <div class="formulario-campos">
                    <input id="campoLoginEmail" type="email" class="campos form-control" name="email"
                      placeholder="E-Mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-campo"></span>
                    <span class="simbolo-campo">
                      <span><i class="far fa-user"></i></span>
                    </span>
                    <small><b class="text-danger"></b></small>
                  </div>
                  {{-- Input contraseña --}}
                  <div class="formulario-campos">
                    <input id="campoLoginPassword" type="password" class="campos form-control" name="contrasena"
                      placeholder="Contraseña" required autocomplete="current-password">
                    <span class="focus-campo"></span>
                    <span class="simbolo-campo">
                      <span><i class="fas fa-lock"></i></span>
                    </span>
                    <small><b class="text-danger"></b></small>
                  </div>
                  {{-- Input Remember --}}
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                      {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label chck-bx" for="remember">Recuerdame</label>
                  </div>

                  <div class="contenidod-login-formulario-btn">
                    <button id="btn-enviar-formulario" class="btn btn-lg btn-primary w-100" type="submit">
                      Inciar sesion
                    </button>
                  </div>
                  <div class="d-flex mt-4 justify-content-between">
                    <a href="{{url('login/facebook')}}" class="btn-face">
                      <i class="fab fa-facebook"></i>
                      Facebook
                    </a>
          
                    <a href="#" class="btn-google">
                      <img src="../img/icon-google.png" alt="Google">
                      Google
                    </a> 
                  </div>
                

                  <div class="text-center w-full no-acount">
                    <a href="{{ route('password.request') }}">
                      @if (Route::has('password.request'))
                      {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                    @endif
                  </div>

                  <div class="text-center w-full no-acount">
                    <span class="txt1">
                      ¿No tienes una cuenta?
                    </span>

                    <a class="register" href="/register">
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

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  {{-- owlcarousel --}}
  <script src="/owl/owl.carousel.min.js"></script>
  <!-- sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

  @if (session('openLogin'))
  {{-- //some js function that will open your hidden modal
    //if you use bootstrap modal --}}
  <script>
    $('#exampleModalLong').modal('show');
  </script>
  @endif

  {{-- main js --}}
  <script src="/js/main.js"></script>

</body>

</html>
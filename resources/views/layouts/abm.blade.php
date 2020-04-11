<!doctype html>
 <html lang="es">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      @yield('token')
      <link rel="icon" type="image/x-icon" href="/img/logo.png" />


      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
      <link rel="stylesheet" href="/fonts/css webfont/all.min.css">
      <!-- Secciones CSS-->
      <link rel="stylesheet" href="/css/app.css">
      <link rel="stylesheet" href="/css/crud.css" id="theme-stylesheet">
      
      <title>Synergic || @yield('title')</title>
  </head>
 
 <body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header">
          <nav class="navbar">
            <div class="container-fluid">
              <div class="navbar-holder d-flex align-items-center justify-content-between">
                <!-- Navbar Header-->
                <div class="navbar-header">
                  <!-- Navbar Brand --><a href="/admin" class="navbar-brand d-none d-sm-inline-block">
                    <img src="/img/logo.png" class="logo" alt="">

                 </a>
                  <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                  <!-- Logout    -->
                  <li class="nav-item">
                    <a href="/" class="nav-link"><i class="fas fa-reply mx-2"></i>Pagina principal</a>
                    </li>
                  <li class="nav-item">
                    {{-- <a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fas fa-sign-out-alt"></i></a> --}}
                    <a class="nav-link logout" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                     {{ __('Cerrar Sesion') }} <i class='fas fa-sign-out-alt mr-2 top-bar-icon'></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="page-content d-flex align-items-stretch"> 
          <!-- Side Navbar -->
          <nav class="side-navbar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="/storage/{{auth()->user()->foto()->first()->nombre}}" alt="..." class="img-fluid rounded-circle"></div>
              <div class="title">
                <h1 class="h4">{{auth()->user()->nombre()}}</h1>
               
              </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
            <ul class="list-unstyled">
              <li class="@yield('inicio')"><a href="/admin"><i class="fas fa-home"></i>Inicio </a></li>
              <li class="@yield('productos')">
                <a href="#exampledropdownDropdown" aria-expanded="@yield('aria')" data-toggle="collapse" class="@yield('collapsed')">
                  <i class="fas fa-box-open"></i> Productos 
                </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled  @yield('show') ">
                  <li class="@yield('listado')"><a href="{{Route('admin.productos.index')}}"><i class="fas fa-list-ul"></i>Listado de productos</a></li>
                  <li class="@yield('crear')"><a href="{{Route('admin.productos.create')}}"><i class="fas fa-plus"></i>Crear producto</a></li>
                </ul>
             </li>
              <li class="@yield('usuarios')"><a href="{{Route('admin.usuarios.index')}}"> <i class="fas fa-user"></i>Usuarios</a></li>

              <li class="@yield('categorias')"><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"><i class="fas fa-box-open"></i> Categorias </a>
                <ul id="exampledropdownDropdown2" class="collapse list-unstyled">
                  <li><a href="{{Route('admin.categorias.index')}}"><i class="fas fa-list-ul"></i>Listado de categorias</a></li>
                  <li><a href="{{Route('admin.categorias.create')}}"><i class="fas fa-plus"></i>Crear categoria</a></li>
                </ul>
             </li>

              <li class="@yield('pedidos')"><a href="/admin/listadoPedidos"> <i class="fas fa-clipboard-list"></i>Pedidos</a></li>


              

            
            </ul>
  
          </nav>
          <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
              <div class="container-fluid">
                <h2 class="no-margin-bottom text-muted">@yield('dashboard')</h2>
              </div>
              
            </header>

            {{-- content --}}
            <div class="content">
                @yield("content")
            </div>
            
          </div>
        </div>
    </div>

    {{-- jquery --}}
     <script
     src="https://code.jquery.com/jquery-3.4.1.min.js"
     integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
     crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- axios -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    <!-- Crud js File-->
    <script src="/js/crud.js"></script>
    
  
</body>

</html>




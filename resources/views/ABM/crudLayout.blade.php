
<!doctype html>
 <html lang="en">
 
 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
     <link rel="stylesheet" href="/fonts/css webfont/all.min.css">
     <!-- Secciones CSS-->
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
                  <!-- Navbar Brand --><a href="admin" class="navbar-brand d-none d-sm-inline-block">
                    <img src="../img/logo.png" class="logo" alt="">
                 </a>
                  <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                  <!-- Logout    -->
                  <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fas fa-sign-out-alt"></i></a></li>
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
              <div class="avatar"><img src="https://via.placeholder.com/150x150" alt="..." class="img-fluid rounded-circle"></div>
              <div class="title">
                <h1 class="h4">Admin</h1>
               
              </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
            <ul class="list-unstyled">
              <li class="@yield('inicio')"><a href="/admin"><i class="fas fa-home"></i>Inicio </a></li>
              <li class="@yield('productos')"><a href="/admin/listadoProductos"> <i class="fas fa-box-open"></i>Productos </a></li>
              <li class="@yield('usuarios')"><a href="/admin/listadoUsuarios"> <i class="fas fa-user"></i>Usuarios</a></li>
              <li class="@yield('categorias')"><a href="/admin/listadoCategorias"> <i class="fas fa-tags"></i>Categorias </a></li>
              <li class="@yield('pedidos')"><a href="/admin/listadoPedidos"> <i class="fas fa-clipboard-list"></i>Pedidos</a></li>
            </ul>
  
          </nav>
          <div class="content-inner">
            <!-- Page Header-->
            <header class="page-header">
              <div class="container-fluid">
                <h2 class="no-margin-bottom">@yield('dashboard')</h2>
              </div>
              
            </header>

            {{-- content --}}
            <div class="content">
                @yield('content')
            </div>
            
          </div>
        </div>
    </div>

     
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
   
    <!-- Main File-->
    <script src="/js/crud.js"></script>

</body>

</html>




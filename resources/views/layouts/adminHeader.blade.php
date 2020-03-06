<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="h-logo px-4">
      <a href="admin2.php" class="logo-img">
        <img src="../../img/logo.png" alt="">
      </a>
    </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto admin-nav-links">
      <li class="nav-item">
        <a class="nav-link" href="/admin/listadoProductos">Listado de productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/listadoUsuarios">Listado de usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/listadoCategorias">Listado de Categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Listado de pedidos</a>
      </li>
    </ul>
    <form class="form-inline admin-searcher mr-auto my-2 my-lg-0" method="get" action="listadoProductos/buscar">
      <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
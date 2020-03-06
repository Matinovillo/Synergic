@include('layouts.configTop')
@include('layouts.header')

  <!--Productos-->
  <div class="container-fluid mt-5">
    <!--<div class="row">
       MENU PARA LA VERSION MOVILE-->
     <!--
      <div class="col-12 d-xs-block d-md-none container-fluid">
        <p>
          <button class="btn category-head btn-lg container-fluid" type="button" data-toggle="collapse"
            data-target="#categoria" aria-expanded="false" aria-controls="categoria">
            CATEGORIA
          </button>
        </p>
        <div class="collapse" id="categoria">
          <div class="card card-body border-light">

            <div class="list-group list-group-flush mb-3 container-fluid">
              <a href="#" class="list-group-item list-group-item-action">Computadoras</a>
              <a href="#" class="list-group-item list-group-item-action">Notebooks</a>
              <a href="#" class="list-group-item list-group-item-action">Monitores</a>
              <a href="#" class="list-group-item list-group-item-action">Productos de oficina</a>
              <a href="#" class="list-group-item list-group-item-action">Almacenamiento</a>
              <a href="#" class="list-group-item list-group-item-action">Componentes de PC</a>
              <a href="#" class="list-group-item list-group-item-action">Hogar</a>
              <a href="#" class="list-group-item list-group-item-action">Celulares y Telefonia</a>
              <a href="#" class="list-group-item list-group-item-action">Sillas y Butacas</a>
            </div>

          </div>
        </div>
      </div>



      <div class="col-12 d-xs-block d-md-none container-fluid">
        <p>
          <button class="btn category-head btn-lg container-fluid" type="button" data-toggle="collapse"
            data-target="#marca" aria-expanded="false" aria-controls="marca">
            MARCA
          </button>
        </p>
        <div class="collapse" id="marca">
          <div class="card card-body border-light">

            <div class="list-group list-group-flush mb-3 container-fluid">
              <a href="#" class="list-group-item list-group-item-action">LG</a>
              <a href="#" class="list-group-item list-group-item-action">LENOVO</a>
              <a href="#" class="list-group-item list-group-item-action">HP</a>
              <a href="#" class="list-group-item list-group-item-action">KINGSTON</a>
              <a href="#" class="list-group-item list-group-item-action">SAMSUNG</a>
              <a href="#" class="list-group-item list-group-item-action">VAIO</a>
              <a href="#" class="list-group-item list-group-item-action">INTEL</a>
              <a href="#" class="list-group-item list-group-item-action">NVIDIA</a>
              <a href="#" class="list-group-item list-group-item-action">AMD</a>
            </div>

          </div>
        </div>
      </div>-->



      <!-- MENU DE PRODUCTOS -->
<!--
      <div class="col-12 col-md-3 ml-4 d-none d-md-block">


        <div class="row">

          <div class="list-group mb-3 container-fluid">
            <li class="list-group-item category-head">
              CATEGORIA
            </li>
            <a href="#" class="list-group-item list-group-item-action">LG</a>
            <a href="#" class="list-group-item list-group-item-action">LENOVO</a>
            <a href="#" class="list-group-item list-group-item-action">HP</a>
            <a href="#" class="list-group-item list-group-item-action">KINGSTON</a>
            <a href="#" class="list-group-item list-group-item-action">SAMSUNG</a>
            <a href="#" class="list-group-item list-group-item-action">VAIO</a>
            <a href="#" class="list-group-item list-group-item-action">INTEL</a>
            <a href="#" class="list-group-item list-group-item-action">NVIDIA</a>
            <a href="#" class="list-group-item list-group-item-action">AMD</a>
          </div>
        </div>

        <div class="row">

          <div class="list-group mb-3 container-fluid">
            <li class="list-group-item category-head">
              MARCA
            </li>
            <a href="#" class="list-group-item list-group-item-action">Computadoras</a>
            <a href="#" class="list-group-item list-group-item-action">Notebooks</a>
            <a href="#" class="list-group-item list-group-item-action">Monitores</a>
            <a href="#" class="list-group-item list-group-item-action">Productos de oficina</a>
            <a href="#" class="list-group-item list-group-item-action">Almacenamiento</a>
            <a href="#" class="list-group-item list-group-item-action">Componentes de PC</a>
            <a href="#" class="list-group-item list-group-item-action">Hogar</a>
            <a href="#" class="list-group-item list-group-item-action">Celulares y Telefonia</a>
            <a href="#" class="list-group-item list-group-item-action">Sillas y Butacas</a>
          </div>
        </div>


      </div>-->


      <!-- IMAGENES DE LOS PRODUCTOS -->
      <div class="col-12 col-md-12 sec-prdcts ">
        <div class="row">
          <!-- -----item 1------ -->
        @foreach($productos as $producto)
          <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow">
              <a href="../html/productDetails.php"><img class="card-img-top" src="http://placehold.it/700x400"
                  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="../html/productDetails.php">{{$producto->nombre}}</a>
                </h4>
                <h5>${{$producto->precio}}</h5>
                <p class="card-text">{{$producto->descripcion}}</p>
              </div>
              @if (Route::has('login'))
              @auth
              <div class="card-footer">
                <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
                <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
              </div>
              @endauth
          @else
                
          @endif
            </div>
          </div>
        @endforeach
        </div>
        <div class="productos-pagination">{{$productos->links()}}</div>
      </div>
    </div>
  <!--/Productos-->
  @include('layouts.footer')
  @include('layouts.configBot')











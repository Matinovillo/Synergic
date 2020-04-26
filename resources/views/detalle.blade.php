@extends('layouts.main')
@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('contenido')
<section class="section_page shoppingProducts container">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 contentProductShopping col-cont">
          <form name="cart_quantity" method="post">
            <div class="title_section_summary text-center" style="margin-bottom: 40px">
              {{$producto->nombre}}
            </div>
            <div class="row">
              <div class="col-sm-3 contenido-centrado-imgs">

              
                @foreach ($producto->fotos as $foto)
                   <div class="contentImageShoppingImgs">
                       <img src="/storage/{{$foto->nombre}}" width="100" height="100">
                   </div>
                @endforeach
            
                
              </div>


              <div class="col-sm-9 contenido-centrado">
                <div id="carouselExampleControls" class="carousel slide contentImageShopping" data-ride="carousel">


                  <div class="carousel-inner">

                
                     @foreach ($producto->fotos as $posicion => $foto)
                        @if($posicion == 0)
                        <div class="carousel-item active">
                            <img src="/storage/{{$foto->nombre}}" width="100" height="100">
                        </div>
                        @else
                        <div class="carousel-item">
                            <img src="/storage/{{$foto->nombre}}" width="100" height="100">
                        </div>
                        @endif
                        
                     @endforeach
                  
            
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
            <div class="text-center order-total-out-price text-primary">
              ${{$producto->precio}}
            </div>
           
            <!-- ---------------------------------------------------------------------- -->
            <div class="padding-col p-3">
              <div class="">

                <div class="theme-text">
                  <div class="title h5">@if($producto->stock <= 0) {{"Sin stock"}}  @else {{"En stock"}} @endif</div>
                  <div class="title h5">Modelo: loremipsum</div>
                </div>
              </div>
            </div>

            <!-- ------------------------------------------------------------------------ -->
           
                <div class="buttonAction text-center action-shopping-cart">
                <a id="tdb1" class="@if(Route::has('login')) @auth {{''}}  @else {{ "addtocart" }} @endauth @endif " href="{{route('cart.add', $producto->id)}}">
                    <span class="btn @if($producto->stock <= 0) {{"disabled"}} @endif">
                      @if($producto->stock <= 0) {{"Sin stock"}}  @else {{"Añadir al carrito"}} @endif
                    </span>
                  </a>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Product Details-->

  <!-- descripcion -->
  <section class="prdcts-desc">
    <div class="container">
      <h3>Descripcion</h3>

      <div class="row">
        <p>{{$producto->descripcion}}</p>
      </div>
{{--       
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 desc-item">
          <i class="fas fa-memory desc-icon"></i>
          <span>Memoria Ram</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 desc-item">
          <i class="fas fa-microchip desc-icon"></i>
          <span>Procesador</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12  desc-item">
          <i class="fas fa-hdd desc-icon"></i>
          <span>Almacenamiento</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12  desc-item">
          <i class="fas fa-desktop desc-icon"></i>
          <span>Utilidad</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12  desc-item">
          <i class="fas fa-wifi desc-icon"></i>
          <span>Conectividad</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12  desc-item">
          <i class="fab fa-windows desc-icon"></i>
          <span>Sistema</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

      </div> --}}
    </div>

  </section>


   
<div class="container my-5">
  <h3 class="text-muted my-2 border-bottom">Productos Relacionados</h3>
  <section class="border-bottom">
    <div class="row">
      <div class="col-xl-12 col-sm-12">
        <div class="owl-carousel owl-theme">
          @php
        $favs = [];
        if(auth()->user() != null){
          $userfavs = auth()->user()->productosFavoritos()->get();
        }else{
          $userfavs = [];
        }
        
        foreach ($userfavs as $value) {
          array_push($favs, $value->id);
        }
      
      @endphp
           @foreach ($productosRelacionados as $related)   
            <div class="cards">
              <div class="card-slider card--1">
                <div class="card__img">
        
                </div>
                <div class="card__img--hover">
                  <a href="{{route('productoDetail', str_replace(" ", "+", $related->nombre))}}" class="producto-imagen-link">
                    <img class="card-img-top" src="/storage/{{$related->fotos->first()->nombre}}" alt="">
                  </a>
                </div>     
                <div class="card__info">
                  <p class="card__title  text-center">
                    <a href="{{route('productoDetail', str_replace(" ", "+", $related->nombre))}}">
                      {{substr($related->nombre,0,60)}}...
                    </a>
                  </p>
                  Precio: <span class="card__category text-success">${{$related->precio}}</span>
                  
                    {{-- boton carrito --}}
                  <span class="card__category">
                    <a href="{{route('cart.add', $related->id)}}" class="card__author text-success @if(Route::has('login')) @auth {{''}}  @else {{ "addtocart" }} @endauth @endif" title="Añadir al carrito">
                      <i class="fas fa-cart-plus"></i>
                    </a>
                  </span>
                  {{-- boton favorito --}}
                  <span class="card__category">
                    <a href="{{route('favorito.add', $related->id)}}" id="favorite{{$related->id}}" class="@if(in_array($related->id, $favs) == true) {{"text-danger"}} @endif card__author favorite-add  mx-2 @if(Route::has('login')) @auth {{''}}  @else {{ "addtocart" }} @endauth @endif" title="author" data-id="{{$related->id}}">
                      <i class="fas fa-heart"></i>
                    </a>
                  </span>
                
                </div>
              </div>
            </div> 
          @endforeach
        </div>
      </div>
    </div>
  </section>
  </div>

  
@endsection
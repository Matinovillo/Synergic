@extends('layouts.main')
@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('contenido')

  <main class="carrusel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="/img/intel.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="/img/intel.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="/img/intel.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </main>
  <!--/Carousel-->
  
  <!--cards-->
  <section class="card-section">
    <div class="info-cards">
      <div class="container">
        <div class="row">
  
        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col">
          
          <div class="info-cards-item d-flex flex-row align-items-center justify-content-start">
            <div class="info-cards-icon"><img src="../img/char_1.png" alt=""></div>
            <div class="info-cards-content">
              <div class="info-cards-title">Envios Gratis</div>
              <div class="info-cards-subtitle">En productos seleccionados</div>
            </div>
          </div>
        </div>
        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col">
          
          <div class="info-cards-item d-flex flex-row align-items-center justify-content-start">
            <div class="info-cards-icon"><img src="../img/char_2.png" alt=""></div>
            <div class="info-cards-content">
              <div class="info-cards-title">Devoluciones</div>
              <div class="info-cards-subtitle">No dudes en consultar!</div>
            </div>
          </div>
        </div>
  
        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col">
          
          <div class="info-cards-item d-flex flex-row align-items-center justify-content-start">
            <div class="info-cards-icon"><img src="../img/char_3.png" alt=""></div>
            <div class="info-cards-content">
              <div class="info-cards-title">Formas de pago</div>
              <div class="info-cards-subtitle">Recibimos todas las tarjetas</div>
            </div>
          </div>
        </div>
        <!-- Char. Item -->
        <div class="col-lg-3 col-md-6 char_col">
          
          <div class="info-cards-item d-flex flex-row align-items-center justify-content-start">
            <div class="info-cards-icon"><img src="../img/contact_3.png" alt=""></div>
            <div class="info-cards-content">
              <div class="info-cards-title">Visita nuestra tienda</div>
              <div class="info-cards-subtitle">1481 lorem, Córdoba, Arg</div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </section>

<div class="container">
  <div class="row">
    <div class="col-12">
        <span class="text-muted h3 mr-2">¡Encontra la mejores notebook!</span>
    <span class="text-muted text-small"><a href="{{Route('productosPorCategoria',"Notebook")}}">Ver notebooks</a></span> 
    </div>
  </div>
</div>

<section class="prdct-slider container">
  <div class="row">
    <div class="col-xl-12 col-sm-12">
      <div class="owl-carousel owl-theme">
         @forelse ($notebooks as $notebook)   
          <article class="cards">
            <div class="card-slider card--1">
              <div class="card__img">
      
              </div>
              <div class="card__img--hover">
                <a href="{{route('productoDetail', str_replace(" ", "+", $notebook->nombre))}}" class="producto-imagen-link">
                  <img class="card-img-top" src="/storage/{{$notebook->fotos->first()->nombre}}" alt="">
                </a>
              </div>     
              <div class="card__info">
                <p class="card__title  text-center">
                  <a href="{{route('productoDetail', str_replace(" ", "+", $notebook->nombre))}}">
                    {{substr($notebook->nombre,0,60)}}...
                  </a>
                </p>
                Precio: <span class="card__category text-success">${{$notebook->precio}}</span>
                @if (Route::has('login'))
                 @auth
                 {{-- Si esta logueado --}}

                 {{-- boton carrito --}}
                  <span class="card__category">
                    <a href="{{route('cart.add', $notebook->id)}}" class="card__author text-success" title="Añadir al carrito">
                      <i class="fas fa-cart-plus"></i>
                    </a>
                  </span>
                  {{-- boton favorito --}}
                  <span class="card__category">
                  <a href="{{route('favorito.add', $notebook->id)}}" id="favorite{{$notebook->id}}" class="card__author favorite-add  mx-2" title="author" data-id="{{$notebook->id}}">
                      <i class="fas fa-heart"></i>
                    </a>
                  </span>
                @else
                 {{-- Si no esta logueado --}}
                  <span class="card__category"><a href="{{route('cart.add', $notebook->id)}}" class="card__author addtocart" title="author"><i class="fas fa-cart-plus"></i></a></span>
                  <span class="card__category"><a href="{{route('favorito.add', $notebook->id)}}" class="card__author mx-2 addtocart" title="author"><i class="fas fa-heart"></i></a></span>
                 @endauth
                @endif
              </div>
            </div>
          </article> 
          @empty
          
        @endforelse
      </div>
    </div>
  </div>
</section>

  
  

@endsection 

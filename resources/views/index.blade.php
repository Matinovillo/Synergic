@extends('layouts.main')
@section('contenido')
  <section class="carousel-sec">
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/intel.jpg" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/nvidia carousel.jpg" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/ryzen.png" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
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
    </div>
  </section>

  
<div class="container">
<section class="prdct-slider">
  <div class="row">
    <div class="col-xl-12 col-sm-12">
      <div class="owl-carousel owl-theme">
         @forelse ($notebooks as $notebook)   
          <div class="cards">
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
                  <span class="card__category"><a href="{{route('cart.add', $notebook->id)}}" class="card__author text-success" title="author"><i class="fas fa-cart-plus"></i></a></span>
                  <span class="card__category"><a href="{{route('favorito.add', $notebook->id)}}" class="card__author text-muted mx-2" title="author"><i class="fas fa-heart"></i></a></span>
                @else
                  <span class="card__category"><a href="{{route('cart.add', $notebook->id)}}" class="card__author addtocart" title="author"><i class="fas fa-cart-plus"></i></a></span>
                  <span class="card__category"><a href="{{route('favorito.add', $notebook->id)}}" class="card__author mx-2 addtocart" title="author"><i class="fas fa-heart"></i></a></span>
                 @endauth
                @endif
              </div>
            </div>
          </div> 
          @empty
          
        @endforelse
      </div>
    </div>
  </div>
</section>
</div>
@endsection 

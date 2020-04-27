@extends('cuenta.cuenta')

@section('account-title', 'Mis productos favoritos')
@section('favs', 'active')
@section('account-content')

<div class="row">
    @forelse (auth()->user()->Productosfavoritos()->get() as $productos) 
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
    <div class="cards">
      <div class="card-slider card--1 shadow">
        <div class="card__img">
        </div>
        <div class="card__img--hover">
          <a href="{{route('productoDetail', str_replace(" ", "+", $productos->nombre))}}" class="producto-imagen-link">
            <img class="card-img-top" src="/storage/{{$productos->fotos->first()->nombre}}" alt="">
          </a>
        </div>     
        <div class="card__info">
          <p class="card__title  text-center">
            <a href="{{route('productoDetail', str_replace(" ", "+", $productos->nombre))}}">
              {{substr($productos->nombre,0,20)}}...
           </a>
          </p>
          Precio: <span class="card__category text-success">${{$productos->precio}}</span>
          <span class="card__category">
            <a href="{{route('cart.add', $productos->id)}}" class="card__author" title="Añadir al carrito">
              <i class="fas fa-cart-plus"></i>
            </a>
          </span>
          <span class="card__category">
            <a href="{{route('favorito.destroy', $productos->id)}}" class="card__author text-danger" title="Quitar de favoritos">
              <i class="fas fa-heart"></i>
            </a>
          </span>
        </div>
      </div>
    </div> 
  </div> 
  @empty

  <div class="container my-5">
  <h3 class="text-center text-muted">No tenes productos favoritos! <a href="/productos">Ver productos</a></h3>
  </div>
  @endforelse
  

</div>
@endsection
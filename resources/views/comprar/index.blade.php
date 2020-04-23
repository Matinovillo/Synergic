@extends('layouts.main')
@section('contenido')

<div class="container my-5 p-5">
    <div class="row">

      @if (session('success'))
    <div class="col-sm-12">
     <div class="alert  alert-success alert-dismissible fade show" role="alert">
         {{ session('success') }}
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
       </div>
    </div>
   @endif
        <div class="col-md-12">
            <h4 class="text-muted comprar-title">Completar datos</h4>
        </div>
        {{-- Formulario --}}
        <div class="col-md-8">
          <form action="{{Route('cuenta.modificar')}}" method="post">
                @csrf
                {{--  --}}
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="" class="text-muted">Nombre</label>
                    <input type="text" class="form-control" value="{{auth()->user()->nombre}}" required name="nombre">
                  </div>
                  {{--  --}}
                  <div class="col-md-6 mb-3">
                    <label for="" class="text-muted">Apellido</label>
                    <input type="text" class="form-control" id="" value="{{auth()->user()->apellido}}" required name="apellido">
                  </div>
                  {{--  --}}
                  <div class="col-md-6 mb-3">
                    <label for="" class="text-muted">E-mail</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                      </div>
                      <input type="text" class="form-control" id="" value="{{auth()->user()->email}}" aria-describedby="inputGroupPrepend" required name="email">
                    </div>
                  </div>
                  {{--  --}}
                  <div class="col-md-4 mb-3">
                    <label for="" class="text-muted">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="" value="{{auth()->user()->fecha_nacimiento}}" required name="fecha_nacimiento">
                  </div>
                </div>
                {{--  --}}
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="" class="text-muted">Calle</label>
                  <input type="text" class="form-control" id="" placeholder="Calle" name="calle" value="@if($domicilio){{$domicilio->calle}}@endif">
                  </div>
                  {{--  --}}
                  <div class="col-md-3 mb-3">
                    <label for="" class="text-muted">Numero</label>
                    <input type="text" class="form-control" id="" placeholder="Numero" name="numero" value="@if($domicilio){{$domicilio->numero}}@endif">
                  </div>
                  {{--  --}}
                  <div class="col-md-3 mb-3">
                    <label for="" class="text-muted">Barrio</label>
                    <input type="text" class="form-control" id="" placeholder="Barrio" name="barrio" value="@if($domicilio){{$domicilio->barrio}}@endif">
                  </div>
                   {{-- ------------------------------- --}}
                </div>
                  {{--  --}}
                  <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label for="" class="text-muted">Codigo postal</label>
                      <input type="text" class="form-control" id="" placeholder="Barrio" name="codigo_postal" value="@if($domicilio){{$domicilio->codigo_postal}}@endif">
                    </div>
                    {{--  --}}
                    <div class="col-md-3 mb-3">
                      <div class="form-group">
                        <label for="" class="text-muted">Provincia</label>
                        <select class="form-control" id="" placeholder="Pronvincia" name="id_provincia">
                          {{-- <option value="">provincia</option> --}}
                          @if(auth()->user()->domicilio()->first() != null)
                          <option value="{{ auth()->user()->domicilio()->first()->provincia()->first()->id }}"> {{ auth()->user()->domicilio()->first()->provincia()->first()->nombre }}</option>
                          @else
                          <option value="">Provincias</option>
                             @foreach ($provincias as $provincia)
                                 <option value="{{$provincia->id}}">{{$provincia->nombre}}</option>
                              @endforeach
                          @endif
                        </select>
                        </div>
                    </div>
                  </div>
                <button class="btn btn-outline-info" type="submit">Guardar</button>
              </form>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header text-center">
              <h5 class="card-title text-muted">Resumen</h5>
            </div>
          {{-- resumen --}}
            <div class="card-body">
              @foreach ($cart as $producto)
              <ul class="list-group list-group-flush">
                <li class="list-group-item p-0">
                  <div class="row producto-row">
                    <div class="col-4 compra-img-content">
                      <a href="{{route('productoDetail', str_replace(" ", "+", $producto->name))}}">
                      <img src="/storage/{{$producto->attributes->imagen}}" alt="">
                    </a>
                    </div>
                    <div class="col-8">
                      <div class="product-box">
                        <a href="{{route('productoDetail', str_replace(" ", "+", $producto->name))}}">
                        {{substr($producto->name,0,30)}}...
                      </a>
                    </div>
                    </div>
                  </div>
                </li>
              </ul>
              @endforeach
            </div>

            
              <ul class="list-group list-group-flush d-flex ">
                <li class="list-group-item d-flex compra-foot">
                  <h6 class="compra-price"><b class="text-muted mr-2">Sub Total:</b></h6> 
                  <span class="h6 font-weight-bold">${{number_format(Cart::session(auth()->id())->getTotal(),'2')}}</span>
                </li>
                <li class="list-group-item d-flex compra-foot">
                  <h6 class="compra-price"><b class="text-muted mr-2">Envio:</b></h6> 
                  <span class="h6 font-weight-bold">$0</span>
                </li>

                <li class="list-group-item d-flex compra-foot">
                    <h6 class="compra-price"><b class="text-muted mr-2">Total:</b></h6> 
                    <span class="h6 font-weight-bold">${{number_format(Cart::session(auth()->id())->getTotal(),'2')}}</span>
                </li>
              </ul>
            <div class="card-footer d-flex">
              {{-- <a class="text-muted h6 m-auto" href="{{route('cart')}}"><i class="fas fa-chevron-left mr-2"></i>Volver al carrito</a> --}}
              <form action="{{ route('confirmar.compra') }}" method="POST">
                @csrf
                
                <button type="submit" class="btn compra-btn border pr-4 rounded">
                
                <span>Pagar con</span>
                <img src="/img/mp-logo.png" class="compra-img" alt="">
                </button></a>
             </form>
            </div>
          </div>
          
          
        </div>
        
        
    </div>


</div>
@endsection
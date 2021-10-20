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
          <form action="{{Route('cuenta.modificar')}}" method="post" class="needs-validation" novalidate>
                @csrf
                {{--  --}}
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="completarNombre" class="text-muted">Nombre</label>
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="completarNombre" value="{{auth()->user()->nombre}}" required name="nombre">
                    @error('nombre')
                      <strong class="text-danger">{{$message}}</strong>
                  	@enderror
                  </div>
                  {{--  --}}
                  <div class="col-md-6 mb-3">
                    <label for="completarApellido" class="text-muted">Apellido</label>
                    <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="completarApellido" value="{{auth()->user()->apellido}}" required name="apellido">
                    @error('apellido')
                     <strong class="text-danger">{{$message}}</strong>
                  	@enderror
                  </div>
                  {{--  --}}
                  <div class="col-md-6 mb-3">
                    <label for="completarEmail" class="text-muted">E-mail</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                      </div>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" id="completarEmail" value="{{auth()->user()->email}}" aria-describedby="inputGroupPrepend" required name="email">
                      @error('email')
                       <strong class="text-danger">{{$message}}</strong>
            	        @enderror
                    </div>
                  </div>
                  {{--  --}}
                  <div class="col-md-4 mb-3">
                    <label for="completarFecha" class="text-muted">Fecha de nacimiento</label>
                    <input type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" id="completarFecha" value="{{auth()->user()->fecha_nacimiento}}" required name="fecha_nacimiento">
                    @error('fecha_nacimiento')
                    <strong class="text-danger">{{$message}}</strong>
            	      @enderror
                  </div>
                </div>
                {{--  --}}
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="completarCalle" class="text-muted">Calle</label>
                  <input type="text" class="form-control @error('calle') is-invalid @enderror" id="completarCalle" placeholder="Calle" name="calle" value="@if($domicilio){{$domicilio->calle}}@endif">
                  @error('calle')
                  <strong class="text-danger">{{$message}}</strong>
                @enderror
                </div>
                  {{--  --}}
                  <div class="col-md-3 mb-3">
                    <label for="completarNumero" class="text-muted">Numero</label>
                    <input type="text" class="form-control @error('numero') is-invalid @enderror" id="completarNumero" placeholder="Numero" name="numero" value="@if($domicilio){{$domicilio->numero}}@endif">
                    @error('numero')
                <strong class="text-danger">{{$message}}</strong>
            	@enderror
                  </div>
                  {{--  --}}
                  <div class="col-md-3 mb-3">
                    <label for="completarBarrio" class="text-muted">Barrio</label>
                    <input type="text" class="form-control @error('barrio') is-invalid @enderror" id="completarBarrio" placeholder="Barrio" name="barrio" value="@if($domicilio){{$domicilio->barrio}}@endif">
                    @error('barrio')
                     <strong class="text-danger">{{$message}}</strong>
            	     @enderror
                  </div>
                   {{-- ------------------------------- --}}
                </div>
                  {{--  --}}
                  <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label for="completarCodigo" class="text-muted">Codigo postal</label>
                      <input type="text" class="form-control @error('codigo_postal') is-invalid @enderror" id="completarCodigo" placeholder="Barrio" name="codigo_postal" value="@if($domicilio){{$domicilio->codigo_postal}}@endif">
                      @error('codigo_postal')
                      <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                    {{--  --}}
                    <div class="col-md-3 mb-3">
                      <div class="form-group">
                        <label for="completarProvincia" class="text-muted">Provincia</label>
                        <select class="form-control @error('id_provincia') is-invalid @enderror" id="completarProvincia" placeholder="Pronvincia" name="id_provincia">
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
                        @error('id_provincia')
                        <strong class="text-danger">{{$message}}</strong>
                      	@enderror
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
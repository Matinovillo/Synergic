@extends('layouts.main')
@section('contenido')

<div class="container mb-5 p-5">
    
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-muted comprar-title">Opciones de envio y pago</h4>
        </div>
        {{-- Formulario --}}
        <div class="col-md-8">
          {{-- alerta al guardar producto --}}
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
        <form action="{{route('generar.pedido')}}" method="POST">
          @csrf
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Formas de entrega</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="forma_entrega">
                      <option value="">Seleccionar de forma de entrega</option>
                      @foreach ($entrega as $option)
                    <option value="{{$option->id}}">{{$option->nombre}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlSelect1">De pago</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="forma_pago">
                      <option value="">Seleccionar forma de pago</option>
                      @foreach ($pago as $option)
                    <option value="{{$option->id}}">{{$option->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
               </form>
        </div>
         {{-- resumen --}}
        <div class="col-md-4">
          <div class="card">
            <div class="card-header text-center">
              <h5 class="card-title text-muted">Resumen</h5>
            </div>
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
              <a class="text-muted h6 m-auto" href="{{route('cart')}}"><i class="fas fa-chevron-left mr-2"></i>Volver al carrito</a>
            <a class="text-primary h6 m-auto" href="">Continuar<i class="fas fa-chevron-right ml-2"></i></a>
            </div>
          </div>
          
          
        </div>
        
        
    </div>


</div>
@endsection
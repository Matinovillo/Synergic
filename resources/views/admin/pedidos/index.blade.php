@extends('layouts.abm')
@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('pedidos', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Pedidos')


@section('content')

<div class="d-flex flex-row justify-content-between align-items-center bg-dark">
  <div class="p-2">
    <form action="{{ Route('admin.pedidos.index') }}" class="form-inline" method="GET">

      <select id="inputState" class="form-control" name="orderBy">
        <option value="">Ordenar Por</option>
        <option value="id" @if($order==="id" ) {{"selected"}} @endif>ID</option>
        <option value="forma_pago" @if($order==="nombre" ) {{"selected"}} @endif>Forma de pago</option>
        <option value="estado" @if($order==="categoria" ) {{"selected"}} @endif>Estado</option>
        <option value="created_at" @if($order==="created_at" ) {{"selected"}} @endif>Fecha</option>
      </select>

      <button type="submit" class="btn btn-primary ml-2">Filtrar</button>
    </form>
  </div>
  <div class="p-2">
    <form class="form-inline" action="{{ Route('admin.pedidos.index') }}">
      <select name="tipo" class="form-control mr-2">
        <option value="id">Buscar por</option>
        <option value="id" @if($tipo==="id" ) {{"selected"}} @endif>ID</option>
        <option value="codigo" @if($tipo==="codigo" ) {{"selected"}} @endif>Codigo</option>
        <option value="forma_pago" @if($tipo==="forma_pago" ) {{"selected"}} @endif>Forma de pago</option>
        <option value="estado" @if($tipo==="estado" ) {{"selected"}} @endif>Estado</option>
      </select>
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="buscar"
        value="{{$buscar}}">
      <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</div>


<section class="my-2">
  <div class="row">
    <div class="col-xl-12">
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
      <table class="table table-light table-hover table-responsive-sm">
        <thead class="adm-th bg-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Fecha</th>
            <th scope="col">Usuario</th>
            <th scope="col">Forma de pago</th>
            <th scope="col">Estado</th>
            <th scope="col">Detalles</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($ventas as $pedido)

          <tr scope="row">
            <th>{{$pedido->id }}</th>
            <th>{{$pedido->codigo}}</th>
            <th>{{$pedido->created_at}}</th>
            <th>{{$pedido->usuario()->first()->nombre()}}</th>
            <th>{{$pedido->forma_pago}}</th>
            <th>{{$pedido->estado}}</th>
            <td>
              <button type="button" class="btn btn-primary shadow" data-toggle="modal"
                data-target="#exampleModal{{$pedido->id}}" title="ver detalle">
                <i class="fas fa-eye"></i>
              </button>
            </td>
            <td class="d-flex">
              <a title="editar" class="mr-2" href="">
                <button class="btn btn-warning shadow">
                  <i class="fas fa-pen"></i>
                </button>
              </a>
              <a id="deletePedido" data-id="{{ $pedido->id }}" class="delete-pedido">
                <button class="pedido-delete btn btn-danger"><i class="fas fa-trash-alt"></i></button>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$ventas->appends(["tipo" => $tipo, "buscar" => $buscar])->appends(["orderBy" => $order])->links()}}
    </div>
  </div>
  </div>
</section>



<!-- Modal -->
@foreach ($ventas as $pedido)
{{-- @dd($pedido->detalle()->get()) --}}
<div class="modal fade" id="exampleModal{{$pedido->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-light" id="exampleModalLabel{{$pedido->id}}">Detalle del pedido Cod.
          <b>{{$pedido->codigo}}</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Producto</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Precio</th>
            </tr>
          </thead>
          @foreach ($pedido->detalle()->get() as $item)
          @foreach ($item->detalleProducto()->get() as $producto)
          <tbody>
            <th scope="row">{{$producto->id}}</th>
            <td>{{$producto->nombre}}</td>
            <td>{{$item->cantidad}}</td>
            <td>${{$item->precio_unitario}}</td>
            </tr>
          </tbody>
          @endforeach
          @endforeach
        </table>
        <div class="text-right border-top p-2 w-100">
          <span class="mr-3 h5 font-weight-bold">Total: <span
              class="text-success">${{$pedido->precio_total}}</span></span>
        </div>

        <div class="border-top">
          <h5 class="pt-4 font-weight-bold">Datos del comprador</h5>
          <dl class="row border-bottom">
            <dt class="col-3">Nombre completo: </dt>
            <dd class="col-9">{{$pedido->usuario()->first()->nombre()}}.</dd>
          </dl>
          <dl class="row border-bottom">
            <dt class="col-3">E-mail</dt>
            <dd class="col-9">{{$pedido->usuario()->first()->email}}</dd>
          </dl>
          <dl class="row border-bottom">
            <dt class="col-3">Fecha de nacimiento</dt>
            <dd class="col-9">{{$pedido->usuario()->first()->fecha_nacimiento}}.</dd>
          </dl>
          <dl class="row">
            <dt class="col-3">Direccion</dt>
            <dd class="col-9">
              @if($pedido->usuario->domicilio)
              {{$pedido->usuario->domicilio['calle']}},
              {{$pedido->usuario->domicilio['numero']}}.
              °B {{$pedido->usuario->domicilio['barrio']}} -
              Provincia {{$pedido->usuario->domicilio->provincia['nombre']}}
              @else
              No completo datos
              @endif
            </dd>
          </dl>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Editar</button>
      </div>
    </div>
  </div>
</div>
@endforeach



@endsection

















{{-- 
        <----RELACIONES TABLA VENTA---->
            
        @foreach ($ventas as $pedido)
           {{$pedido->formasDePagos()->first()->nombre}} ||
{{$pedido->formasDeEntregas()->first()->nombre}} ||
{{$pedido->estado()->first()->nombre}} ||
{{$pedido->usuario()->first()->nombre()}}
@endforeach



<----RELACIONES TABLA DETALLE VENTA---->

  @foreach ($detalle as $detalleVenta)
  {{$detalleVenta->detalleProducto()->first()->nombre}}
  {{$detalleVenta->venta()->first()->codigo}}
  @endforeach
  --}}





  {{-- DETALLES DE PEDIDO --}}

  {{-- @foreach ($detalle as $detail)
    
        <tr scope="row">
            <th scope="row">{{ $detail->venta()->first()->id }}</th>
  <td>{{ $detail->venta()->first()->codigo }}</td>
  <td>{{ $detail->venta()->first()->created_at }}</td>
  <td>{{ $detail->venta()->first()->usuario()->first()->nombre() }}</td>
  <td>{{ $detail->detalleProducto()->first()->id }}</td>
  <td>{{ $detail->venta()->first()->estado()->first()->nombre }}</td>
  <td><a href="">Ver detalles</a></td>
  <td class="d-flex">
    <a title="editar" class="mr-2" href=""><button class="action-button-edit bg-warning"><i
          class="fas fa-pen"></i></button></a>
    <form action="" method="POST">
      @csrf
      {{ method_field('DELETE') }}
      <button type="submit" class="action-button-delete bg-danger"><i class="fas fa-trash-alt"></i></button></a>
    </form>
  </td>
  </tr>
  @endforeach --}}
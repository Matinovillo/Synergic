@extends('layouts.abm')

@section('pedidos', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Pedidos')


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="list-head my-2">
                <div class="row">
                  <div class="col-6">
                     <form method="GET" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
                     </form>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="admin-table-sec my-2">
    <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
  
    <table class="table table-light table-hover">
      <thead class="adm-th bg-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Codigo</th>
          <th scope="col">Fecha</th>
          <th scope="col">Usuario</th>
          {{-- <th scope="col">Producto</th> --}}
          <th scope="col">Estado</th>
          <th scope="col">Detalle</th>
          <th scope="col">Acciones</th>
        </tr>
    </thead>
      <tbody>
  
          @foreach ($ventas as $pedido)
            {{-- @dd($pedido->estado()->first()->nombre) --}}
            <tr scope="row">
                <th scope="row">{{ $pedido->id }}</th>
                <td>{{ $pedido->codigo }}</td>
                <td>{{ $pedido->created_at }}</td>
                <td>{{ $pedido->usuario()->first()->nombre()}}</td>
                {{-- <td>{{ $pedido->detalle()->first()->detalleProducto()->first()->nombre }}</td> --}}
                <td>{{ $pedido->estado()->first()->nombre}}</td>
                <td><a href="">Ver detalles</a></td>
                <td class="d-flex">
                   <a title="editar" class="mr-2" href=""><button class="action-button-edit bg-warning"><i class="fas fa-pen"></i></button></a>
                   <form action="" method="POST">
                      @csrf
                       {{ method_field('DELETE') }}
                         <button type="submit" class="action-button-delete bg-danger"><i class="fas fa-trash-alt"></i></button></a>
                   </form>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
    </div>
    </div>
    </div>
  </section>
  



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
               <a title="editar" class="mr-2" href=""><button class="action-button-edit bg-warning"><i class="fas fa-pen"></i></button></a>
               <form action="" method="POST">
                  @csrf
                   {{ method_field('DELETE') }}
                     <button type="submit" class="action-button-delete bg-danger"><i class="fas fa-trash-alt"></i></button></a>
               </form>
          </td>
        </tr>
      @endforeach --}}
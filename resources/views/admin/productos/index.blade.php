@extends('layouts.abm')
@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
{{-- @section('productos', 'active') --}}

@section('show','show')
@section('aria', 'true')
@section('collapsed', 'collapsed')
@section('listado', 'active')

@section('title', 'Admin Page')
@section('dashboard', 'Listado de productos')

@section('content')

<div class="container-fluid">
<nav class="navbar navbar-light bg-light p-2">
  {{$productos->links()}}
  <form class="form-inline">
    <div class="input-group">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </div>
    <div class="input-group mx-4">
      <select class="custom-select">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  </form>
</nav>
</div>



<section class="admin-table-sec table-responsive my-2">
  <div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
    <table class="table table-light table-hover">
      <thead class="adm-th bg-dark" id="thead">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Precio</th>
          <th scope="col">Stock</th>
          <th scope="col">Categoria</th>
          {{-- <th scope="col">Imagenes</th> --}}
          <th scope="col">Acciones</th>
        </tr>
      </thead>
              <tbody class="align-middle tr-content " id="productos">
                
                @forelse($productos as $producto)
                    <tr scope="row">
                    <th scope="row">{{$producto->id}}</th>
                    <td>{{substr($producto->nombre,0,30)}}...</td>
                    <td>{{substr($producto->descripcion,0,50)}}...</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>
                      @if($producto->categoria != null)
                      {{$producto->categoria()->first()->nombre}}
                      @else
                      sin categoria
                      @endif
                    </td>
                    
                    <td class="d-flex">                      
                     <a title="editar" class="mr-2" href="{{route('admin.productos.edit',$producto->id)}}">
                      <button class="action-button-edit">
                         <i class="fas fa-pen"></i>
                      </button>
                      </a>
                      <a id="deleteProducto" data-id="{{ $producto->id }}" class="delete-producto">
                        <button class="producto-delete action-button-delete"><i class="fas fa-trash-alt"></i></button>
                      </a>
                      
                      </td>
                  </tr>
                  @empty
                    
                  
                @endforelse
                
              </tbody>
    </table>  
  </div>
  

  </div>
  </div>
</section>

@endsection


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

<nav class="container-fluid filter-nav">
  <ul class="list-unstyled d-flex">
    <li>
    <form action="{{ Route('admin.productos.index') }}" class="form-inline" method="GET">
  
          <select id="inputState" class="form-control" name="orderBy">
            <option value="">Odernar Por</option>
            <option value="id">ID</option>
            <option value="nombre">Nombre</option>
            <option value="precio">Precio</option>
            <option value="stock">Stock</option>
            <option value="id_categoria">Categoria</option>
          </select>

          <button type="submit" class="btn btn-outline-primary ml-2">Filtrar</button>
      </form>
    </li>
    <li class="search-fiter">
      <form class="form-inline" action="{{ Route('admin.productos.index') }}">
        <select id="inputState" class="form-control" name="tipo">
          <option value="">Buscar Por</option>
          <option value="nombre">Nombre</option>
          <option value="precio">Precio</option>
          <option value="stock">Stock</option>
          <option value="id_categoria">Categoria</option>
        </select>

        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="buscar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </li>
  </ul>
</nav>



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
              <tr scope="row" class="@if($producto->stock == 0){{"table-danger"}} @endif">
                    <th scope="row">{{$producto->id}}</th>
                    <td>{{substr($producto->nombre,0,30)}}...</td>
                    <td>{{substr($producto->descripcion,0,50)}}...</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                       @if($producto->stock == 0)
                        <b>{{"Sin stock"}}</b>  
                       @else
                        {{$producto->stock}}
                       @endif
                    </td>
                    <td>
                      @if($producto->categoria != null)
                      {{$producto->categoria()->first()->nombre}}
                      @else
                      sin categoria
                      @endif
                    </td>
                    
                    <td class="d-flex">                      
                     <a title="editar" class="mr-2" href="{{route('admin.productos.edit',$producto->id)}}">
                      <button class="btn btn-warning shadow">
                         <i class="fas fa-pen"></i>
                      </button>
                      </a>
                      <a id="deleteProducto" data-id="{{ $producto->id }}" class="delete-producto">
                        <button class="producto-delete btn btn-danger shadow"><i class="fas fa-trash-alt"></i></button>
                      </a>
                      
                      </td>
                  </tr>
                  @empty
                    
                  
                @endforelse
                
              </tbody>
    </table> 
    {{$productos->links()}} 
  </div>
  

  </div>
  </div>
</section>

@endsection


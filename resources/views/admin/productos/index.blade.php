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
                
                {{-- @forelse($productos as $producto)
                    <tr scope="row">
                    <th scope="row">{{$producto->id}}</th>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->categoria->nombre}}</td>
                    
                    <td class="d-flex">
                      
                      <a title="editar" class="mr-2" href="/admin/editarProducto/{{$producto->id}}"><button class="action-button-edit"><i class="fas fa-pen"></i></button></a>
                      <a href="/borrarProducto/{{$producto->id}}" id="deleteProducto" data-id="{{ $producto->id }}" class="delete-link">
                        <button class="producto-delete action-button-delete"><i class="fas fa-trash-alt"></i></button>
                      </a>
               
                    </td>
                  </tr>
                  @empty
                    <h1 class="text-muted text-center">No hay productos.</h1>
                  
                @endforelse --}}
                
              </tbody>
    </table>
    <h1 class="text-muted text-center d-none" id="empty">No hay productos.</h1>
  {{-- {{ $productos->links() }} --}}

  </div>
  

  </div>
  </div>
</section>


{{-- <script type="text/javascript">
  function handleSelect(elem)
  {
  window.location = "?"+elem.value;
  }
  </script> --}}

  
@endsection


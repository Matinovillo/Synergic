@extends('layouts.abm')
@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('categorias', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Categorias')

@section('content')

<div class="container-fluid">
  <div class="row">
   <div class="col-12">
      <div class="list-head my-2">
          <div class="row">
            <div class="col-md-6">
              {{ $categorias->links() }}
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

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

<section class="admin-table-sec my-2">
  <div class="container-fluid">
      <div class="row">
          <div class="col-xl-12">
              <div class="table-wrapper-scroll-y my-custom-scrollbar">
                  <table class="table table-light table-hover">
                      <thead class="adm-th bg-dark">
                          <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Descripcion</th>
                              <th scope="col">Orden</th>
                              <th scope="col">Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($categorias as $categoria)
                          <tr scope="row">
                              <th scope="row">{{$categoria->id}}</th>
                              <td>{{$categoria->nombre}}</td>
                              <td>{{$categoria->descripcion}}</td>
                              <td>{{$categoria->orden}}</td>
                              <td class="text-left">
                                  <a title="editar" class="mr-2" href="{{ route('admin.categorias.edit', $categoria->id) }}">
                                      <button class="action-button-edit bg-warning"><i class="fas fa-pen"></i></button>
                                  </a>
                                  <a id="deleteCategoria" data-id="{{ $categoria->id }}" class="delete-categoria">
                                      <button class="categoria-delete action-button-delete"><i class="fas fa-trash-alt"></i></button>
                                  </a>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</section>
  
  <script type="text/javascript">
  function handleSelect(elem)
  {
  window.location = "?"+elem.value;
  }
  </script>

@endsection

  
  
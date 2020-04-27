@extends('layouts.abm')
@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('categorias', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Categorias')

@section('content')

<div class="d-flex flex-row justify-content-between align-items-center bg-dark">
    <div class="p-2">
      <form action="{{ Route('admin.categorias.index') }}" class="form-inline" method="GET">
    
        <select id="inputState" class="form-control" name="orderBy">
          <option value="">Ordenar Por</option>
          <option value="id" @if($order === "id") {{"selected"}} @endif>ID</option>
          <option value="nombre" @if($order === "nombre") {{"selected"}} @endif>Nombre</option>
          <option value="orden" @if($order === "orden") {{"selected"}} @endif>Orden</option>
        </select>
    
        <button type="submit" class="btn btn-primary ml-2">Filtrar</button>
    </form>
    </div>
    <div class="p-2">
      <form class="form-inline" action="{{ Route('admin.categorias.index') }}">
        <select name="tipo" class="form-control mr-2">
          <option value="nombre">Buscar por</option>
          <option value="id" @if($tipo === "id") {{"selected"}} @endif>ID</option>
          <option value="nombre" @if($tipo === "nombre") {{"selected"}} @endif>Nombre</option>
        </select>
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="buscar" value="{{$buscar}}">
        <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>
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

<section class="my-2">
      <div class="row">
          <div class="col-xl-12">
                  <table class="table table-sm-responsive table-light table-hover">
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
                                      <button class="btn btn-warning"><i class="fas fa-pen"></i></button>
                                  </a>
                                  <a id="deleteCategoria" data-id="{{ $categoria->id }}" class="delete-categoria">
                                      <button class="categoria-delete btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                  </a>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  {{$categorias->appends(["tipo" => $tipo, "buscar" => $buscar])->appends(["orderBy" => $order])->links()}}
              </div>
          </div>
</section>
 

@endsection

  
  
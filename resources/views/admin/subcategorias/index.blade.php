@extends('layouts.abm')
@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('subcategorias', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Subcategorias')

@section('content')
<div class="d-flex container flex-row justify-content-between align-items-center bg-dark">
    <div class="p-2">
      <form action="{{ Route('admin.subcategorias.index') }}" class="form-inline" method="GET">
    
        <select id="inputState" class="form-control" name="orderBy">
          <option value="">Ordenar Por</option>
          <option value="id" @if($order === "id") {{"selected"}} @endif>ID</option>
          <option value="nombre" @if($order === "nombre") {{"selected"}} @endif>Nombre</option>
          <option value="id_categoria_padre" @if($order === "categoria") {{"selected"}} @endif>Categoria</option>
          <option value="orden" @if($order === "orden") {{"selected"}} @endif>Orden</option>
        </select>
    
        <button type="submit" class="btn btn-primary ml-2">Filtrar</button>
    </form>
    </div>
    <div class="p-2">
      <form class="form-inline" action="{{ Route('admin.subcategorias.index') }}">
        <select name="tipo" class="form-control mr-2">
          <option value="nombre">Buscar por</option>
          <option value="id" @if($tipo === "id") {{"selected"}} @endif>ID</option>
          <option value="nombre" @if($tipo === "nombre") {{"selected"}} @endif>Nombre</option>
          <option value="id_categoria_padre" @if($tipo === "id_categoria_padre") {{"selected"}} @endif>Categoria</option>
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
                                <th scope="col">Categoria</th>
                                <th scope="col">Orden</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $subcategoria)
                            <tr scope="row">
                                <th scope="row">{{$subcategoria->id}}</th>
                                <td>{{$subcategoria->nombre}}</td>
                                <td>{{$subcategoria->descripcion}}</td>
                                <td>{{$subcategoria->padre->nombre}}</td>
                                <td>{{$subcategoria->orden}}</td>
                                <td class="text-left">
                                    <a title="editar" class="mr-2" href="{{ route('admin.subcategorias.edit', $subcategoria->id) }}">
                                        <button class="btn btn-warning"><i class="fas fa-pen"></i></button>
                                    </a>
                                    <a id="deleteCategoria" data-id="{{ $subcategoria->id }}" class="delete-categoria">
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
        </div>
    </div>
  </section>
@endsection
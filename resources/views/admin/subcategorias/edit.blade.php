@extends('layouts.abm')

@section('subcategorias', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Editar Subcategoria')

@section('content')

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


<div class="form-back my-3">
  <div class="row justify-content-center my-5">
    <div class="col-10">
      <form action="{{ route('admin.subcategorias.update', $subcategoria) }}" method="post">
        {{ method_field('PUT') }}
        @csrf
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label>Nombre:</label>
            <input type="text" class="form-control" value="{{$subcategoria->nombre}}" name="nombre">
              @error('nombre')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Descripcion:</label>
              <input type="text" class="form-control" value="{{$subcategoria->descripcion}}" name="descripcion">
              @error('descripcion')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Orden:</label>
              <input type="text" class="form-control" name="orden" value="{{$subcategoria->orden}}">
               @error('nombre')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Categoria:</label>
              {{-- @dd($subcategoria->id_categoria_padre) --}}
              <select class="form-control" name="id_categoria_padre">
              <option value="{{$subcategoria->id_categoria_padre}}">Elegí una Categoria</option>
                @foreach ($category as $padre)
              <option value="{{$padre->id}}" @if($padre->id == $subcategoria->id_categoria_padre) {{"selected"}} @endif>{{$padre->nombre}}</option>
               @endforeach
              </select>
              @error('id_categoria_padre')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
  
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Guardar</button>
            <a href="{{ route('admin.subcategorias.index') }}" class="btn btn-danger"><i class="fas fa-ban mr-2"></i>Volver</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
  
  @endsection
  
  
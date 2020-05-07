@extends('layouts.abm')

@section('categorias', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Editar Categoria')

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
      <form action="{{ route('admin.categorias.update', $categoria) }}" method="post">
        {{ method_field('PUT') }}
        @csrf
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Nombre:</label>
            <input type="text" class="form-control" value="{{$categoria->nombre}}" name="nombre">
            @error('nombre')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Descripcion:</label>
              <input type="text" class="form-control" value="{{$categoria->descripcion}}" name="descripcion">
              @error('descripcion')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
              <label>Orden:</label>
              <input type="number" class="form-control" name="orden" value="{{$categoria->orden}}">
               @error('nombre')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
  
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Guardar</button>
            <a href="{{ route('admin.categorias.index') }}" class="btn btn-danger"><i class="fas fa-ban mr-2"></i>Volver</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
  
  @endsection
  
  
  
  
  
  
  
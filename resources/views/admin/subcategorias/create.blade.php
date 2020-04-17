@extends('layouts.abm')

@section('subcategorias', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Crear Subcategoria')

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

<div class="form-back  my-5">
  <div class="row justify-content-center">
    <div class="col-10">
    <form method="post" action="{{ route('admin.subcategorias.store') }}">
        @csrf
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label class="text-muted h6">Nombre:</label>
              <input type="text" class="form-control" value="{{old('nombre')}}" name="nombre">
              @error('nombre')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="text-muted h6">Descripcion:</label>
            <input type="text" class="form-control" value="{{old('descripcion')}}" name="descripcion">
              @error('descripcion')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="text-muted h6">Orden:</label>
              <input type="text" class="form-control" name="orden" value="{{old('orden')}}">
              @error('orden')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label>Categoria:</label>
              <select class="form-control" name="id_categoria_padre">
                <option value="">Elegí una Categoria</option>
                @foreach ($category as $padre)
                <option value="{{$padre->id}}">{{$padre->nombre}}</option>
               @endforeach
              </select>
              @error('id_categoria_padre')
                <small class="text-danger"><strong>{{$message}}</strong></small>
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
  
  
  
  
  
  
  
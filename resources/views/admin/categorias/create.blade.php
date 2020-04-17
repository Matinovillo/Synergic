@extends('layouts.abm')

@section('categorias', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Crear categoria')

@section('content')
<div class="form-back  my-5">
  <div class="row justify-content-center">
    <div class="col-10">
    <form method="post" action="{{ route('admin.categorias.store') }}">
        @csrf
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label class="text-muted h6">Nombre:</label>
              <input type="text" class="form-control" value="{{old('nombre')}}" name="nombre">
              @error('nombre')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="text-muted h6">Descripcion:</label>
            <input type="text" class="form-control" value="{{old('descripcion')}}" name="descripcion">
              @error('descripcion')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="text-muted h6">Orden:</label>
              <input type="text" class="form-control" name="orden" value="{{old('orden')}}">
              @error('nombre')
                <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
  
          <div class="col-12 text-center">
            <button type="submit" name="" class="btn btn-primary">GUARDAR</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
  
  @endsection
  
  
  
  
  
  
  
@extends('ABM.crudLayout')

@section('productos', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Crear Producto')

@section('content')

<div class="form-back  my-5">
<div class="row justify-content-center">
    <div class="col-10">

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
      
      <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label class="text-muted h6">Nombre:</label>
            <input type="text" class="form-control" value="{{old("nombre")}}" name="nombre">
              @error('nombre')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label class="text-muted h6">Descripcion:</label>
              <input type="text" class="form-control" value="{{old("descripcion")}}" name="descripcion">
              @error('descripcion')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="text-muted h6">Precio:</label>
              <input type="text" class="form-control" value="{{old("precio")}}" name="precio">
              @error('precio')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="text-muted h6">Stock:</label>
              <input type="text" class="form-control" value="{{old("stock")}}" name="stock">
              @error('stock')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
  
          <div class="col-6">
            <div class="form-group">
              <label class="text-muted h6">Categoria:</label>
              <select class="form-control" name="id_categoria">
                <option value="">Elegí una Categoria</option>
                  @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                   @endforeach
              </select>
              @error('id_categoria')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
  
          <div class="col-6">
            <div class="form-group">
              <label class="text-muted h6">Imagen de producto</label>
            <input name="imagen" type="file" class="form-control-file" id="exampleFormControlFile1">
              @error('imagen')
              <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" name="editUser" class="btn btn-primary">GUARDAR</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div> 
@endsection





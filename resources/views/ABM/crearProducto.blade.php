@extends('ABM.crudLayout')
@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('productos', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Crear Producto')

@section('content')

<div class="form-back  my-5">
<div class="row justify-content-center">
    <div class="col-10">
      
    <form method="post" id="multiSelectForm" enctype="multipart/form-data">
      @csrf
          <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label class="text-muted h6">Nombre:</label>
            <input type="text" class="form-control" value="{{old("nombre")}}" name="nombre" id="inpNombre">
              @error('nombre')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label class="text-muted h6">Descripcion:</label>
              <input type="text" class="form-control" value="{{old("descripcion")}}" name="descripcion" id="inpDesc">
              @error('descripcion')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="text-muted h6">Precio:</label>
              <input type="text" class="form-control" value="{{old("precio")}}" name="precio" id="inpPrecio">
              @error('precio')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="text-muted h6">Stock:</label>
              <input type="text" class="form-control" value="{{old("stock")}}" name="stock" id="inpStock">
              @error('stock')
                <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
  
          <div class="col-6">
            <div class="form-group">
              <label class="text-muted h6">Categoria:</label>
              <select class="form-control" name="id_categoria" id="inpCategoria">
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
            <input name="imagen" type="file" class="form-control-file" id="inpImg">
              @error('imagen')
              <small class="text-danger"><strong>{{$message}}</strong></small>
              @enderror
            </div>
          </div>
          <div class="col-12">
            <button type="submit" id="submitBtn" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Guardar</button>
            <a href="/admin/listadoProductos" class="btn btn-danger"><i class="fas fa-ban mr-2"></i>Volver</a> 
          </div>
        </div>
      </form>
    </div>
  </div>
</div> 
@endsection




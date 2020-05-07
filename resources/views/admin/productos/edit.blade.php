@extends('layouts.abm')

@section('productos', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Editar Producto')

@section('content')



{{-- alerta al editar producto --}}
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
      <form action="{{ route('admin.productos.update', $producto) }}" method="POST" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        @csrf

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label>Nombre:</label>
              <input type="text" class="form-control" value="{{$producto->nombre}}" name="nombre">
              @error('nombre')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Precio:</label>
              <input type="text" class="form-control" value="{{$producto->precio}}" name="precio">
              @error('precio')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Stock:</label>
              <input type="text" class="form-control" value="{{$producto->stock}}" name="stock">
              @error('stock')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label>Categoria:</label>
              <select class="form-control" name="id_categoria">

                @if($producto->id_categoria != null)
                <option value="{{$producto->categoria->id}}">{{$producto->categoria->nombre}}</option>
                @else
                @if(count($categorias) == 0)
                <option value="">No hay categorias</option>
                @else
                <option value="">Elegi una categoria</option>
                @endif
                @endif

                @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
              </select>
              @error('id_categoria')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Agregar mas Imagenes</label>
              <input name="imagen" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripcion </label>
              <textarea class="form-control" id="exampleFormControlTextarea1" 
              rows="6" name="descripcion">{{$producto->descripcion}}</textarea>
             
              @error('descripcion')
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Guardar</button>
            <a href="{{ route('admin.productos.index') }}" class="btn btn-danger"><i
                class="fas fa-ban mr-2"></i>Volver</a>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>

{{-- 
<div class="form-back my-3">
  <div class="row img-cont">
    <div class="col-12">
      <h3 class="text-muted text-center">Imagenes de producto</h3>
    </div>
    <div class="owl-carousel owl-theme">
      @foreach ( $imagen as $image )
      <div class="col-6 img-contenedor">
        <div class="product-img p-2">
          <form action="{{ route('admin.productos.borrarImg')}} " method="post">
@csrf
<input type="hidden" name="id" value="{{$image->id}}">
<input type="hidden" name="producto_id" value="{{$producto->id}}">
<img src="/storage/{{$image->nombre}}" alt="">
<button title="borrar imagen" type="submit" class="btn btn-sm btn-danger btn @if(count($imagen) <= 1) d-none @endif"><i
    class="fas fa-trash-alt"></i></button>
</form>
</div>
</div>
@endforeach
</div>
</div>
</div> --}}


<div class="form-back my-3">
  <div class="row">
    <div class="col-12">
      <h3 class="text-muted text-center">Imagenes de producto</h3>
    </div>
  </div>
  <div class="owl-carousel owl-theme">
    @foreach ( $imagen as $image )
    <div class="item product-img my-2">
      <form action="{{ route('admin.productos.borrarImg')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$image->id}}">
        <input type="hidden" name="producto_id" value="{{$producto->id}}">
        <img src="/storage/{{$image->nombre}}" alt="">
        <button title="borrar imagen" type="submit"
          class="img-delete-btn btn btn-sm btn-danger btn @if(count($imagen) <= 1) d-none @endif">
          <i class="fas fa-trash-alt"></i>
        </button>
      </form>

    </div>
    @endforeach
  </div>



  @endsection
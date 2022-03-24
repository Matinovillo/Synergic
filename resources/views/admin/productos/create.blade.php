@extends('layouts.abm')
@section('token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('show', 'show')
@section('aria', 'true')
@section('collapsed', 'collapsed')
@section('crear', 'active')


@section('title', 'Admin Page')
@section('dashboard', 'Crear Producto')

@section('content')
    <div class="form-back my-5">
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
        <div class="row justify-content-center">
            <div class="col-xl-10 col-md-10 col-sm-10 col-xs-10">
                <form method="post" enctype="multipart/form-data" action="{{ Route('admin.productos.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="text-muted h6">Nombre:</label>
                                <input type="text" class="form-control" value="{{ old('nombre') }}" name="nombre">
                                @error('nombre')
                                    <small class="text-danger"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="text-muted h6">Precio:</label>
                                <input type="text" class="form-control" value="{{ old('precio') }}" name="precio">
                                @error('precio')
                                    <small class="text-danger"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="text-muted h6">Stock:</label>
                                <input type="text" class="form-control" value="{{ old('stock') }}" name="stock">
                                @error('stock')
                                    <small class="text-danger"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="text-muted h6">Categoria:</label>
                                <select class="form-control" name="id_categoria">
                                    <option value="">Elegí una Categoria</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('id_categoria')
                                    <small class="text-danger"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xl6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="text-muted h6">Imagen de producto</label>
                                <input type="file" class="form-control-file" name="imagen">
                                @error('imagen')
                                    <small class="text-danger"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripcion </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion del producto"
                                    name="descripcion">{{ old('descripcion') }}</textarea>
                                @error('descripcion')
                                    <small class="text-danger"><strong>{{ $message }}</strong></small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Guardar</button>
                            <a href="{{ route('admin.productos.index') }}" class="btn btn-danger"><i
                                    class="fas fa-ban mr-2"></i>Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

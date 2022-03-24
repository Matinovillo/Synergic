@extends('layouts.abm')

@section('usuarios', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Editar Usuario')

@section('content')
    {{-- alerta al editar usuario --}}
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

    <div class="form-back  my-3">
        <div class="row justify-content-center">
            <div class="col-10">
                <form action="{{ route('admin.usuarios.update', $usuario) }}" method="POST">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="text-muted">Nombre:</label>
                                <input type="text" class="form-control" value="{{ $usuario->nombre }}" name="nombre">
                                @error('nombre')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="text-muted">Apellido:</label>
                                <input type="text" class="form-control" value="{{ $usuario->apellido }}"
                                    name="apellido">
                                @error('apellido')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="text-muted">E-mail</label>
                                <input type="text" class="form-control" value="{{ $usuario->email }}" name="email">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <h6 class="text-muted">Roles</h6>
                                @foreach ($roles as $rol)
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" name="roles[]" class="custom-control-input"
                                            id="check-{{ $rol->id }}" value="{{ $rol->id }}"
                                            @if ($usuario->roles->pluck('id')->contains($rol->id)) checked @endif>
                                        <label class="custom-control-label"
                                            for="check-{{ $rol->id }}">{{ $rol->nombre }}</label>
                                    </div>
                                @endforeach
                                @error('roles')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Guardar</button>
                            <a href="{{ route('admin.usuarios.index') }}" class="btn btn-danger"><i
                                    class="fas fa-ban mr-2"></i>Volver</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

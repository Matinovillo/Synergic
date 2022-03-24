@extends('layouts.abm')

@section('inicio', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'inicio')
@section('token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div class="row">
        <!-- Card Item -->
        <div class="col-lg-3 col-md-6">
            <div class="card admin-card shadow-sm">
                <div class="card-body">
                    <h3 class="text-primary text-center">
                        <i class="fas fa-exclamation mx-2"></i> {{ $sinstock }}
                    </h3>
                    <p class="h5 text-primary">
                        Productos sin stock
                    </p>
                    <small><a href="{{ url('/admin/productos?orderBy=stock') }}">Ver productos</a></small>
                </div>
            </div>
        </div>
        <!-- Card Item -->
        <div class="col-lg-3 col-md-6">
            <div class="card admin-card shadow-sm">
                <div class="card-body">
                    <h3 class="text-primary text-center">
                        <i class="fas fa-user mx-2"></i> +{{ count($newusers) }}
                    </h3>
                    <p class="h5 text-primary">
                        Usuarios nuevos hoy
                    </p>
                    <small><a href="{{ route('admin.usuarios.index') }}">Ver Usuarios</a></small>
                </div>
            </div>
        </div>
        <!-- Card Item -->
        <div class="col-lg-3 col-md-6">
            <div class="card admin-card shadow-sm">
                <div class="card-body">
                    <h3 class="text-primary text-center">
                        <i class="fas fa-store mx-2"></i> {{ count($pedidos) }}
                    </h3>
                    <p class="h5 text-primary">
                        Total de pedidos
                    </p>
                    <small><a href="{{ route('admin.pedidos.index') }}">Ver Pedidos</a></small>
                </div>
            </div>
        </div>
        <!-- Card Item -->
        <div class="col-lg-3 col-md-6">
            <div class="card admin-card shadow-sm">
                <div class="card-body">
                    <h3 class="text-primary text-center">
                        <i class="far fa-envelope mx-2"></i> {{ count($mensajes) }}
                    </h3>
                    <p class="h5 text-primary">
                        Mensajes nuevos
                    </p>
                    <small><a href=""></a></small>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-xl-6">
            <h4 class="text-muted">
                Mensajes
            </h4>

            <table class="table table-hover table-sm table-light shadow-sm  table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">nombre</th>
                        <th scope="col">apellido</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">telefono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($mensajes as $mensaje)
                        <tr>
                            <th scope="row">{{ $mensaje->id }}</th>
                            <td>{{ $mensaje->nombre }}</td>
                            <td>{{ $mensaje->apellido }}</td>
                            <td>{{ $mensaje->email }}</td>
                            <td>{{ $mensaje->celular }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary shadow" data-toggle="modal"
                                    data-target="#exampleModal{{ $mensaje->id }}" title="ver mensaje">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a href="{{ route('borrarMensaje', $mensaje->id) }}" id="deleteMensaje"
                                    data-id="{{ $mensaje->id }}" class="delete-mensaje">
                                    <button class="mensaje-delete btn btn-sm btn-danger"><i
                                            class="fas fa-trash-alt"></i></button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (count($mensajes) <= 0)
                <h5 class="text-muted text-center">
                    No hay mensajes para mostrar
                </h5>
            @endif
        </div>
    </div>

    @foreach ($mensajes as $mensaje)
        <div class="modal fade" id="exampleModal{{ $mensaje->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mensaje:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ $mensaje->mensaje }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
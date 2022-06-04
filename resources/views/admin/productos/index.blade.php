@extends('layouts.abm')
@section('token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('show', 'show')
@section('aria', 'true')
@section('collapsed', 'collapsed')
@section('listado', 'active')

@section('title', 'Admin Page')
@section('dashboard', 'Listado de productos')

@section('content')
    <div class="d-flex flex-row justify-content-between align-items-center bg-dark filter-sec">
        <div class="p-2 filter-item1">
            <form action="{{ Route('admin.productos.index') }}" class="form-inline" method="GET">

                <select id="inputState" class="form-control" name="orderBy">
                    <option value="">Ordenar por:</option>
                    <option value="id" @if ($order === 'id') {{ 'selected' }} @endif>ID</option>
                    <option value="nombre" @if ($order === 'nombre') {{ 'selected' }} @endif>Nombre</option>
                    <option value="precio" @if ($order === 'precio') {{ 'selected' }} @endif>Precio</option>
                    <option value="stock" @if ($order === 'stock') {{ 'selected' }} @endif>Stock</option>
                    <option value="id_categoria" @if ($order === 'id_categoria') {{ 'selected' }} @endif>Categoria
                    </option>
                </select>

                <button type="submit" class="btn btn-primary ml-2">Filtrar</button>
            </form>
        </div>
        <div class="p-2 filter-item2">
            <form class="form-inline" action="{{ Route('admin.productos.index') }}">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar por el nombre" aria-label="Search"
                    name="buscar" value="{{ $string }}">
                <button class="btn btn-primary my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>

    <section class="table-sm-responsive my-2">
        <div class="row">
            <div class="col-xl-12">
                <table class="table table-light table-hover table-responsive-sm">
                    <thead class="bg-dark" id="thead">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Categoria</th>
                            {{-- <th scope="col">Imagenes</th> --}}
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle tr-content " id="productos">

                        @forelse($productos as $producto)
                            <tr scope="row" class="@if ($producto->stock <= 0) {{ 'table-danger' }} @endif">
                                <th scope="row">{{ $producto->id }}</th>
                                <td>{{ substr($producto->nombre, 0, 30) }}...</td>
                                <td>{{ substr($producto->descripcion, 0, 50) }}...</td>
                                <td>$ {{ number_format($producto->precio, 2, ",", ".") }}</td>
                                <td>
                                    @if ($producto->stock == 0)
                                        <b>{{ 'Sin stock' }}</b>
                                    @else
                                        {{ $producto->stock }}
                                    @endif
                                </td>
                                <td>
                                    @if ($producto->categoria != null)
                                        {{ $producto->categoria()->first()->nombre }}
                                    @else
                                        sin categoria
                                    @endif
                                </td>

                                <td class="d-flex">
                                    <a title="editar" class="mr-2"
                                        href="{{ route('admin.productos.edit', $producto->id) }}">
                                        <button class="btn btn-warning shadow">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                    </a>
                                    <a id="deleteProducto" data-id="{{ $producto->id }}" class="delete-producto">
                                        <button class="producto-delete btn btn-danger shadow"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </a>

                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
                {{ $productos->appends(['buscar' => $string])->appends(['orderBy' => $order])->links() }}
            </div>
        </div>
    </section>
@endsection

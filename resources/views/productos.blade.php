@extends('layouts.main') @section('contenido')
    <!--Productos-->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- MENU PARA LA VERSION MOVILE-->
            <div class="col-12 d-xs-block d-md-none container-fluid">
                <p>
                    <button class="btn category-head btn-lg container-fluid" type="button" data-toggle="collapse"
                        data-target="#marca" aria-expanded="false" aria-controls="marca">
                        Categorias
                    </button>
                </p>
                <div class="collapse" id="marca">
                    <div class="card card-body border-light">

                        <div class="list-group list-group-flush mb-3 container-fluid">
                            @foreach ($categorias as $categoria)
                                <a href="{{ route('productosPorCategoria', str_replace(' ', '+', $categoria->nombre)) }}"
                                    class="list-group-item list-group-item-action">{{ $categoria->nombre }}</a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            <!-- MENU DE PRODUCTOS -->

            <div class="col-12 col-md-3 ml-4 d-none d-md-block">

                <div class="row">
                    <nav id="sidebar">
                        <div class="p-4 pt-5">
                            <h4>Categorias</h4>
                            <ul class="list-unstyled components mb-5">

                                @foreach ($categorias as $categoria)
                                    <li>
                                        <a href="#pageSubmenu{{ $categoria->id }}" data-toggle="collapse"
                                            aria-expanded="false" class="dropdown-toggle">{{ $categoria->nombre }}</a>
                                        <ul class="collapse list-unstyled" id="pageSubmenu{{ $categoria->id }}">
                                            @foreach ($categoria->hijas as $subCategoria)
                                                <li><a
                                                        href="{{ route('productosPorCategoria', str_replace(' ', '+', $subCategoria->nombre)) }}"><span
                                                            class="fa fa-chevron-right mr-2"></span>{{ $subCategoria->nombre }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </nav>
                </div>

            </div>

            <!-- Items  -->
            <div class="col-12 col-md-8 sec-prdcts ">

                <div class="row">
                    <p class="text-muted mx-3">Mostrando {{ count($productos) }} items</p>

                </div>
                <div class="row">
                    <!-- -----item------ -->
                    @forelse ($productos as $producto)
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                            <div class="card h-100 sm-shadow">
                                <a href="{{ route('productoDetail', str_replace(' ', '+', $producto->nombre)) }}"
                                    class="producto-imagen-link">
                                    <img class="card-img-top"
                                        src="/storage/{{ $producto->fotos()->get()->first()->nombre }}" alt="">
                                </a>
                                @if ($producto->stock <= 0)
                                    <p class="text-muted text-center h5 font-weight-bolder nostock">Sin stock</p>
                                @endif
                                <div class="card-body">
                                    <span>Precio:</span>
                                    <h5 class="text-success">${{ $producto->precio }}</h5>
                                    <a href="{{ route('productoDetail', str_replace(' ', '+', $producto->nombre)) }}">
                                        <p class="card-text">{{ $producto->nombre }}
                                    </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                    <!-- -----/item------ -->
                </div>
                <div class="row">
                    <div class="col-12">
                        {{ $productos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Productos-->
@endsection

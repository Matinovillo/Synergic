@extends('layouts.main')

@section('contenido')
    <div class="container">
        <div class="row">
            {{-- profile sidebar --}}
            <div class="col-md-3 account-sidebar mt-5">
                <h3 class="text-left font-weight-bolder title-color mb-5 ">Mi cuenta</h3>
                <nav>
                    <div class="list-group account-list">
                        <a href="{{ url('cuenta/datospersonales') }}"
                            class="list-group-item list-group-item-action account-item @yield('datos')">
                            <i class="fas fa-user"></i> Mis datos
                        </a>
                        <a href="{{ url('cuenta/misfavoritos') }}"
                            class="list-group-item list-group-item-action account-item @yield('favs')">
                            <i class="fas fa-heart"></i> Mis productos favoritos
                        </a>
                        <a href="{{ url('cuenta/mispedidos') }}"
                            class="list-group-item list-group-item-action account-item @yield('mispedidos')">
                            <i class="fas fa-shopping-bag"></i> Mis Pedidos
                        </a>
                        <a href="{{ url('cuenta/modificardatos') }}"
                            class="list-group-item list-group-item-action account-item @yield('modificar')">
                            <i class="fas fa-cogs"></i> Modificar mis datos
                        </a>
                    </div>
                </nav>
            </div>
            {{-- profile body --}}
            <div class="col-md-9">
                <section>
                    <h3 class="text-left font-weight-bolder text-muted my-5 ">@yield('account-title')</h3>

                    <div>
                        @yield('account-content')
                    </div>

                </section>
            </div>
        </div>
    </div>
@endsection
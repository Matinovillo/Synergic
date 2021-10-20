@extends('cuenta.cuenta')

@section('account-title', 'Mis pedidos')
@section('mispedidos', 'active')
@section('account-content')
@if (session('compraSuccess'))
<div class="col-sm-12">
    <div class="alert alert-sucess alert-dismissible fade show" role="alert">
        {{ session('compraSuccess') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif

@if (session('info'))
<div class="col-sm-12">
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif


<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-0">
            <div class="cart_container">
                @forelse ($pedidos as $item)
                <div class="cart_items">
                    <ul class="cart_list p-0">
                        <li class="cart_item clearfix">
                            <div class="cart_item_image">
                                <img src="/storage/{{$item->detalle()->first()->detalleProducto()->first()->fotos()->first()->nombre}}" alt="">
                            </div>
                            <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                <div class="cart_item_name cart_info_col">
                                    <div class="cart_item_title">Producto</div>
                                    <div class="cart_item_text">

                                        <p>
                                            {{ $item->detalle()->first()->detalleProducto()->first()->nombre }}
                                        </p>
                                        </a>
                                    </div>
                                </div>

                                <div class="cart_item_quantity cart_info_col">
                                    <div class="cart_item_title text-center">Cantidad</div>
                                    <div class="cart_item_text mt-lg-4">
                                       {{ $item->detalle()->first()->cantidad }}
                                    </div>
                                </div>
                                <div class="cart_item_price cart_info_col">
                                    <div class="cart_item_title text-center">Precio Total</div>
                                    <div class="cart_item_text mt-lg-4">
                                        $ {{ $item->precio_total }}
                                    </div>
                                </div>
                                <div class="cart_item_total cart_info_col">
                                    <div class="cart_item_title text-center">Estado</div>
                                    <div class="art_item_textc mt-lg-4">
                                        @if($item->estado == "approved")
                                          <p class="text-success cart_item_text">Aprobado</p>
                                        @elseif($item->estado == "in_process")
                                         <p class="text-warning cart_item_text">En proceso</p>
                                         @elseif($item->estado == "pending")
                                         <p class="text-info cart_item_text">Pendiente de pago</p>
                                         @endif
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
                @empty
                    <h5 class="text-muted text-center">Parece que todavia no tenes compras realizadas <a href="{{ url('/productos') }}">Ver productos</a></h5>
                @endforelse
            </div>
            {{ $pedidos->links() }}
        </div>
    </div>
</div>
@endsection
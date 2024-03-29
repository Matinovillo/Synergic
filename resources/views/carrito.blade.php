@extends('layouts.main')
@section('contenido')
<div class="cart_section">
    <div class="container">
        <div class="row">
            @if (session('fail'))
            <div class="col-sm-12">
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ session('fail') }}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
               </div>
            </div>
            @endif
            <div class="col-lg-10 offset-lg-1">
                @if(Cart::session(auth()->id())->getContent()->count() > 0)
                <div class="cart_container">
                    <div class="cart_title">Carrito de Compras</div>
                    @foreach ($cartItems as $item )

                    <div class="cart_items">
                        <ul class="cart_list p-0">
                            <li class="cart_item clearfix">
                            <div class="cart_item_image">
                                <img src="/storage/{{$item->attributes->imagen}}" alt="">
                            </div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Producto</div>
                                        <div class="cart_item_text">
                                        <a href="{{route('productoDetail', str_replace(" ", "+", $item->name))}}">
                                        <p>
                                                {{$item->name}}
                                        </p>
                                        </a>
                                        </div>
                                    </div>

                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title text-center">Cantidad</div>
                                        <div class="cart_item_text mt-lg-4">
                                        {{-- Modificar cantidad --}}
                                        <form action="{{route('cart.update',$item->id)}}">
                                        <div class="form-group d-flex">
                                            <input type="number" name="quantity" value="{{$item->quantity}}" class="form-control inp-cant">
                                            <input type="submit" class="btn btn-small btn-sm btn-info mx-1 " value="actualizar">
                                        </div>
                                        </form>

                                        </div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title text-center">Precio</div>
                                            <div class="cart_item_text mt-lg-4">${{number_format($item->price,'2')}}</div>
                                        </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title text-center">Sub Total</div>
                                        <div class="cart_item_text mt-lg-4">${{number_format(Cart::session(auth()->id())->get($item->id)->getPriceSum(),'2')}}</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Quitar del carrito</div>
                                        <div class="cart_item_text mt-lg-4 text-center">
                                        <a href="{{route('cart.destroy', $item->id)}}" class="cart-down"><i class="fas fa-cart-arrow-down h4 cart-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>
                    @endforeach

                    <!-- Order Total -->
                    <div class="order_total">
                        <div class="order_total_content text-md-right col-12">
                            <div class="order_total_title">Total: </div>
                            <div class="order_total_amount">${{number_format(Cart::session(auth()->id())->getTotal(),'2')}}</div>
                        </div>

                    </div>
                    <div class="cart_buttons mt-sm-auto mt-lg-4 mt-md-4 text-md-right d-flex">
                        <form action="{{route('cart.clear')}}" method="GET">
                            <button type="submit" class="button cart_button_clear">Vaciar Carrito</button>
                        </form>
                    <a href="{{ Route('finalizar.compra') }}"><button type="submit" class="button cart_button_checkout">Finalizar compra</button></a>

                    </div>


                    @else
                        <div class="container text-muted text-center">
                            <h4>No hay productos en el carrito :(</h4>
                            <h5><a href="/productos">Ver productos</a></h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
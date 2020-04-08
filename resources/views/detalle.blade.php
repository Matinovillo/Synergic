@extends('layouts.main')

@section('contenido')
<section class="section_page shoppingProducts container">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 contentProductShopping col-cont">
          <form name="cart_quantity" method="post">
            <div class="title_section_summary text-center" style="margin-bottom: 40px">
              {{$producto->nombre}}
            </div>
            <div class="row">
              <div class="col-sm-3 contenido-centrado-imgs">

              
                @foreach ($producto->fotos as $foto)
                   <div class="contentImageShoppingImgs">
                       <img src="/storage/{{$foto->nombre}}" width="100" height="100">
                   </div>
                @endforeach
            
                
              </div>


              <div class="col-sm-9 contenido-centrado">
                <div id="carouselExampleControls" class="carousel slide contentImageShopping" data-ride="carousel">


                  <div class="carousel-inner">

                
                     @foreach ($producto->fotos as $posicion => $foto)
                        @if($posicion == 0)
                        <div class="carousel-item active">
                            <img src="/storage/{{$foto->nombre}}" width="100" height="100">
                        </div>
                        @else
                        <div class="carousel-item">
                            <img src="/storage/{{$foto->nombre}}" width="100" height="100">
                        </div>
                        @endif
                        
                     @endforeach
                  
            
                  </div>


                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="fa fa-chevron-circle-left  carousel-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="fa fa-chevron-circle-right carousel-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 content_cart_order_totals col-cont">
          <div class="contentTotals">
            <div class="text-center order-total-out-price text-primary">
              ${{$producto->precio}}
            </div>
            <div class="padding-col quote-col modal-col" style="padding-right: 0">
              <div class="modal-container" href="_metodosPagoMP.php?price=26990&amp;hide_comodities_button=true"
                tabindex="-1" rel="modalOpenPage" data-toggle="modal" data-target="#paymentMethodsMP"
                style="cursor: pointer;">
                <div class="modal-detail-display payment-method">
                  <div class="theme-icon">
                    <div class="container-icon">
                      <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="theme-text">
                    <div class="title">PAGÁ EN MUCHAS CUOTAS</div>
                    <div>calculá tu cuota y forma de pago</div>
                  </div>
                  <div class="access-icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
            <div class="padding-col modal-col">
              <div class="modal-container" href="sending_methods_modal.php" tabindex="-1" rel="modalOpenPage"
                data-toggle="modal" data-target="#sendingMethods" style="cursor: pointer;">
                <div class="modal-detail-display payment-method">
                  <div class="theme-icon">
                    <div class="container-icon">
                      <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="theme-text">
                    <div class="title">RECIBÍ TU PRODUCTO</div>
                    <div>seleccioná la forma de entrega</div>
                  </div>

                  <div class="access-icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
            <!-- ---------------------------------------------------------------------- -->
            <div class="padding-col p-3">
              <div class="">

                <div class="theme-text">
                  <div class="title">Disponibilidad: En stock: {{$producto->stock}}</div>

                  <div class="title">Modelo: loremipsum</div>
                </div>
              </div>
            </div>

            <!-- ------------------------------------------------------------------------ -->
            @if (Route::has('login'))
              @auth
                <div class="buttonAction text-center action-shopping-cart">
                  <a id="tdb1" href="{{route('cart.add', $producto->id)}}">
                    <span class="btn">
                      Añadir al carrito
                    </span>
                  </a>
                </div>
            @else
              <div class="buttonAction text-center action-shopping-cart">
                <a id="tdb1" class="addtocart" href="{{route('cart.add', $producto->id)}}">
                  <span class="btn">
                    Añadir al carrito
                  </span>
                </a>
              </div>
            @endauth
          @endif
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Product Details-->

  <!-- descripcion -->
  <section class="prdcts-desc">
    <div class="container">
      <h3>Descripcion</h3>

      <div class="row">
        <p>{{$producto->descripcion}}</p>
      </div>
      <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 desc-item">
          <i class="fas fa-memory desc-icon"></i>
          <span>Memoria Ram</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 desc-item">
          <i class="fas fa-microchip desc-icon"></i>
          <span>Procesador</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12  desc-item">
          <i class="fas fa-hdd desc-icon"></i>
          <span>Almacenamiento</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12  desc-item">
          <i class="fas fa-desktop desc-icon"></i>
          <span>Utilidad</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12  desc-item">
          <i class="fas fa-wifi desc-icon"></i>
          <span>Conectividad</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12  desc-item">
          <i class="fab fa-windows desc-icon"></i>
          <span>Sistema</span>
          <p>aca va la descripcion de tal cosa</p>
        </div>

      </div>
    </div>

  </section>
@endsection
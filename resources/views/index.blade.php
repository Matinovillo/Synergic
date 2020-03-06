@include('layouts.configTop')
@include('layouts.header')


<section class="carousel-sec">
  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/intel.jpg" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/nvidia carousel.jpg" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/ryzen.png" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<!--/Carousel-->

<!--cards-->
<section class="card-section">
<div class="cards">
  <div class="container">
    <div class="row">

      <!-- Char. Item -->
      <div class="col-lg-3 col-md-6 char_col">
        
        <div class="cards-item d-flex flex-row align-items-center justify-content-start">
          <div class="cards-icon"><img src="../img/char_1.png" alt=""></div>
          <div class="cards-content">
            <div class="cards-title">Envios Gratis</div>
            <div class="cards-subtitle">En productos seleccionados</div>
          </div>
        </div>
      </div>
      <!-- Char. Item -->
      <div class="col-lg-3 col-md-6 char_col">
        
        <div class="cards-item d-flex flex-row align-items-center justify-content-start">
          <div class="cards-icon"><img src="../img/char_2.png" alt=""></div>
          <div class="cards-content">
            <div class="cards-title">Devoluciones</div>
            <div class="cards-subtitle">No dudes en consultar!</div>
          </div>
        </div>
      </div>

      <!-- Char. Item -->
      <div class="col-lg-3 col-md-6 char_col">
        
        <div class="cards-item d-flex flex-row align-items-center justify-content-start">
          <div class="cards-icon"><img src="../img/char_3.png" alt=""></div>
          <div class="cards-content">
            <div class="cards-title">Formas de pago</div>
            <div class="cards-subtitle">Recibimos todas las tarjetas</div>
          </div>
        </div>
      </div>
      <!-- Char. Item -->
      <div class="col-lg-3 col-md-6 char_col">
        
        <div class="cards-item d-flex flex-row align-items-center justify-content-start">
          <div class="cards-icon"><img src="../img/contact_3.png" alt=""></div>
          <div class="cards-content">
            <div class="cards-title">Visita nuestra tienda</div>
            <div class="cards-subtitle">1481 lorem, Córdoba, Arg</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!--cards-->



<!--Banner-->
<div class="banner1">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <h2>Productos destacados</h2>
        </div>
    </div>
    </div>
</div>
<!--/Banner-->

<!--Productos Destacados-->

<section class="prdcts-slider">
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                {{-- 1ra seccion --}}
                        <div class="item carousel-item active">
                            <div class="row">
                    @for($i=0 ; $i<4 ; $i++)
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper ">
                                        <span class="wish-icon"><i class="far fa-heart"></i></span>
                                        <div class="img-box">
                                            <img src="/img/pc.png" class="img-responsive img-fluid" alt="">									
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Apple iPad</h4>									
                                            <p class="item-price">Precio: <b>$369.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>						
                                    </div>
                                </div>
                                @endfor	
                            </div>
                     </div>
                
                {{-- 2da seccion --}}
                        <div class="item carousel-item">
                            <div class="row">
                    @for($i=0 ; $i<4 ; $i++)
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper ">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="/img/pc.png" class="img-responsive img-fluid" alt="">									
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Apple iPad</h4>									
                                            <p class="item-price">Precio: <b>$369.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>						
                                    </div>
                                </div>
                                @endfor	
                            </div>
                </div>
            
                {{-- 3ra seccion --}}
                    <div class="item carousel-item">
                            <div class="row">
                    @for($i=0 ; $i<4 ; $i++)
                                <div class="col-sm-3">
                                    <div class="thumb-wrapper ">
                                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                        <div class="img-box">
                                            <img src="/img/pc.png" class="img-responsive img-fluid" alt="">									
                                        </div>
                                        <div class="thumb-content">
                                            <h4>Apple iPad</h4>									
                                            <p class="item-price">Precio: <b>$369.00</b></p>
                                            <a href="#" class="btn btn-primary">Add to Cart</a>
                                        </div>						
                                    </div>
                                </div>
                                @endfor	
                            </div>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                </div>
            </div>
        </div>
</section>
<!--/roductos Destacados-->


@include('layouts.footer')
@include('layouts.configBot')


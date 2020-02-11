<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Font Awesome icons CSS-->
  <link rel="stylesheet" href="../fonts/css webfont/all.min.css">

  <!-- Secciones CSS-->
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/navmenu.css">

  <title>Synergic || Tienda tecno</title>
</head>

<body>
  <!--Header-->
  <?php 
  include("header.php");
  ?>
  <!--/Header-->
  <!--Carousel-->
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
            <img src="../img/intel.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/nvidia carousel.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../img/ryzen.png" class="d-block w-100" alt="...">
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
  <!--cards-->
 
 
  <!--Banner-->
  <section class="banner1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Productos destacados</h2>
        </div>
      </div>
    </div>
  </section>
  <!--/Banner-->


  <!--Productos-->
  <div class="container my-5">
    <section class="sec-prdcts">
      <div class="row">

        <!-- -----item 3------ -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="card-index">
          <div class="img-container">
          <img class="card-img-top" src="../img/pc.png" alt="">
              <p>Notebook HP 245 G7 Ryzen 3 2200U 4G 1Tb 14" Free</p>
        </div>
            <div class="card-footer">
              <small class="text-primary">$00.00</small>
              <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
              <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
            </div>
          </div>
        </div>
        <!-- -----item 3------ -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="card-index">
          <div class="img-container">
          <img class="card-img-top" src="../img/pc.png" alt="">
              <p>Notebook HP 245 G7 Ryzen 3 2200U 4G 1Tb 14" Free</p>
        </div>
            <div class="card-footer">
              <small class="text-primary">$00.00</small>
              <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
              <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
            </div>
          </div>
        </div>
        <!-- -----item 3------ -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="card-index">
          <div class="img-container">
          <img class="card-img-top" src="../img/pc.png" alt="">
              <p>Notebook HP 245 G7 Ryzen 3 2200U 4G 1Tb 14" Free</p>
        </div>
            <div class="card-footer">
              <small class="text-primary">$00.00</small>
              <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
              <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
            </div>
          </div>
        </div>
        <!-- -----item 3------ -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="card-index">
          <div class="img-container">
          <img class="card-img-top" src="../img/pc.png" alt="">
              <p>Notebook HP 245 G7 Ryzen 3 2200U 4G 1Tb 14" Free</p>
        </div>
            <div class="card-footer">
              <small class="text-primary">$00.00</small>
              <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
              <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
            </div>
          </div>
        </div>
        <!-- --------- /item------------ -->
      </div>
    </section>
  </div>
  <!--/Productos-->

  <!--footer-->
  <?php 
  include("footer.php");
  ?>
  <!--/footer-->


  <!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <!-- navmenu -->
  <script src="../main.js"></script>
</body>

</html>

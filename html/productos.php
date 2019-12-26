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
  <?php 
  include("header.php");
  ?>


  <!--Productos-->
  <div class="container-fluid mt-5">
    <div class="row">
      <!-- MENU PARA LA VERSION MOVILE-->

      <div class="col-12 d-xs-block d-md-none container-fluid">
        <p>
          <button class="btn category-head btn-lg container-fluid" type="button" data-toggle="collapse"
            data-target="#categoria" aria-expanded="false" aria-controls="categoria">
            CATEGORIA
          </button>
        </p>
        <div class="collapse" id="categoria">
          <div class="card card-body border-light">

            <div class="list-group list-group-flush mb-3 container-fluid">
              <a href="#" class="list-group-item list-group-item-action">Computadoras</a>
              <a href="#" class="list-group-item list-group-item-action">Notebooks</a>
              <a href="#" class="list-group-item list-group-item-action">Monitores</a>
              <a href="#" class="list-group-item list-group-item-action">Productos de oficina</a>
              <a href="#" class="list-group-item list-group-item-action">Almacenamiento</a>
              <a href="#" class="list-group-item list-group-item-action">Componentes de PC</a>
              <a href="#" class="list-group-item list-group-item-action">Hogar</a>
              <a href="#" class="list-group-item list-group-item-action">Celulares y Telefonia</a>
              <a href="#" class="list-group-item list-group-item-action">Sillas y Butacas</a>
            </div>

          </div>
        </div>
      </div>



      <div class="col-12 d-xs-block d-md-none container-fluid">
        <p>
          <button class="btn category-head btn-lg container-fluid" type="button" data-toggle="collapse"
            data-target="#marca" aria-expanded="false" aria-controls="marca">
            MARCA
          </button>
        </p>
        <div class="collapse" id="marca">
          <div class="card card-body border-light">

            <div class="list-group list-group-flush mb-3 container-fluid">
              <a href="#" class="list-group-item list-group-item-action">LG</a>
              <a href="#" class="list-group-item list-group-item-action">LENOVO</a>
              <a href="#" class="list-group-item list-group-item-action">HP</a>
              <a href="#" class="list-group-item list-group-item-action">KINGSTON</a>
              <a href="#" class="list-group-item list-group-item-action">SAMSUNG</a>
              <a href="#" class="list-group-item list-group-item-action">VAIO</a>
              <a href="#" class="list-group-item list-group-item-action">INTEL</a>
              <a href="#" class="list-group-item list-group-item-action">NVIDIA</a>
              <a href="#" class="list-group-item list-group-item-action">AMD</a>
            </div>

          </div>
        </div>
      </div>



      <!-- MENU DE PRODUCTOS -->

      <div class="col-12 col-md-3 ml-4 d-none d-md-block">


        <div class="row">

          <div class="list-group mb-3 container-fluid">
            <li class="list-group-item category-head">
              CATEGORIA
            </li>
            <a href="#" class="list-group-item list-group-item-action">LG</a>
            <a href="#" class="list-group-item list-group-item-action">LENOVO</a>
            <a href="#" class="list-group-item list-group-item-action">HP</a>
            <a href="#" class="list-group-item list-group-item-action">KINGSTON</a>
            <a href="#" class="list-group-item list-group-item-action">SAMSUNG</a>
            <a href="#" class="list-group-item list-group-item-action">VAIO</a>
            <a href="#" class="list-group-item list-group-item-action">INTEL</a>
            <a href="#" class="list-group-item list-group-item-action">NVIDIA</a>
            <a href="#" class="list-group-item list-group-item-action">AMD</a>
          </div>
        </div>

        <div class="row">

          <div class="list-group mb-3 container-fluid">
            <li class="list-group-item category-head">
              MARCA
            </li>
            <a href="#" class="list-group-item list-group-item-action">Computadoras</a>
            <a href="#" class="list-group-item list-group-item-action">Notebooks</a>
            <a href="#" class="list-group-item list-group-item-action">Monitores</a>
            <a href="#" class="list-group-item list-group-item-action">Productos de oficina</a>
            <a href="#" class="list-group-item list-group-item-action">Almacenamiento</a>
            <a href="#" class="list-group-item list-group-item-action">Componentes de PC</a>
            <a href="#" class="list-group-item list-group-item-action">Hogar</a>
            <a href="#" class="list-group-item list-group-item-action">Celulares y Telefonia</a>
            <a href="#" class="list-group-item list-group-item-action">Sillas y Butacas</a>
          </div>
        </div>


      </div>


      <!-- IMAGENES DE LOS PRODUCTOS -->
      <div class="col-12 col-md-8 sec-prdcts ">
        <div class="row">
          <!-- -----item 1------ -->
          <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow">
              <a href="../html/productDetails.php"><img class="card-img-top" src="http://placehold.it/700x400"
                  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="../html/productDetails.php">Item One</a>
                </h4>
                <h5>$00.00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
                <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
              </div>
            </div>
          </div>

          <!-- -----item 2------ -->
          <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow">
              <a href="../html/productDetails.php"><img class="card-img-top" src="http://placehold.it/700x400"
                  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="../html/productDetails.php">Item One</a>
                </h4>
                <h5>$00.00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
                <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
              </div>
            </div>
          </div>

          <!-- -----item 3------ -->
          <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow">
              <a href="../html/productDetails.php"><img class="card-img-top" src="http://placehold.it/700x400"
                  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="../html/productDetails.php">Item One</a>
                </h4>
                <h5>$00.00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
                <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
              </div>
            </div>
          </div>

          <!-- -----item 4------ -->
          <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow">
              <a href="../html/productDetails.php"><img class="card-img-top" src="http://placehold.it/700x400"
                  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="../html/productDetails.php">Item One</a>
                </h4>
                <h5>$00.00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
                <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
              </div>
            </div>
          </div>

          <!-- -----item 5------ -->
          <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow">
              <a href="../html/productDetails.php"><img class="card-img-top" src="http://placehold.it/700x400"
                  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="../html/productDetails.php">Item One</a>
                </h4>
                <h5>$00.00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
                <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
              </div>
            </div>
          </div>

          <!-- -----item 6------ -->
          <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow">
              <a href="../html/productDetails.php"><img class="card-img-top" src="http://placehold.it/700x400"
                  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="../html/productDetails.php">Item One</a>
                </h4>
                <h5>$00.00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
                <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
              </div>
            </div>
          </div>

          <!-- -----item 6------ -->
          <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow">
              <a href="../html/productDetails.php"><img class="card-img-top" src="http://placehold.it/700x400"
                  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="../html/productDetails.php">Item One</a>
                </h4>
                <h5>$00.00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
                <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
              </div>
            </div>
          </div>

          <!-- -----item 6------ -->
          <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow">
              <a href="../html/productDetails.php"><img class="card-img-top" src="http://placehold.it/700x400"
                  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="../html/productDetails.php">Item One</a>
                </h4>
                <h5>$00.00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
                <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
              </div>
            </div>
          </div>

          <!-- -----item 6------ -->
          <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow">
              <a href="../html/productDetails.php"><img class="card-img-top" src="http://placehold.it/700x400"
                  alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="../html/productDetails.php">Item One</a>
                </h4>
                <h5>$00.00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <i class="fas fa-cart-plus car-icon" title="Añadir al carro de compras"></i>
                <i class="far fa-heart car-icon mx-4" title="Añadir a favoritos"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/Productos-->


  <?php 
  include("footer.php");
  ?>

















  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

  <script src="../main.js"></script>
</body>

</html>
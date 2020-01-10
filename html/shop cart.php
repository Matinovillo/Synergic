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

  <!--/Carrito-->
  <section class="section_page shoppingProducts container">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 contentProductShopping col-cont">
          <form name="cart_quantity" method="post">
            <div class="title_section_summary text-center" style="margin-bottom: 40px">
              Carrito de Compra
            </div>
            <div class="row" style="margin-bottom: 20px;">
              <div class="col-sm-5 text-center">
                Producto
              </div>
              <div class="col-sm-2 text-center">
                Cantidad
              </div>
              <div class="col-sm-2 text-center">
                Precio
              </div>
              <div class="col-sm-2 text-center">
                Subtotal
              </div>
              <div class="col-sm-1 text-center"></div>
            </div>
            <div class="row">
              <div class="col-sm-5 contenido-centrado">
                <div class="contentImageShopping">
                  <img src="../img/pc.png"
                    alt="Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb)"
                    title=" Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb) " width="100" height="100">
                </div>
                <div class="contentImageDescription">
                  <a href="#"><strong>Pc AMD Gamer ZEN Kronos Ryzen 5 3400G Ssd 240Gb 8GB (2x4gb)</strong>
                    | </a>
                  <br>
                </div>
              </div>
              <div class="col-sm-2 contenido-centrado">
                <div class="input-group-qty">
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected></option>
                    <option selected="selected" value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-2 contenido-centrado">
                <div class="prod-price">
                  <strong class="precioProducto">$26990</strong>
                </div>
              </div>
              <div class="col-sm-2 contenido-centrado">
                <div class="prod-price">
                  <strong id="priceProduct_11411">$26990</strong>
                </div>
              </div>
              <div class="col-sm-1 contenido-centrado">
                <div class="prod-rm">
                  <a class="" href="#" title="Eliminar Producto">
                    <i class="fa fa-trash-o quitarProducto" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
            <hr class="separatorProducts">
          </form>
        </div>
        <div class="col-lg-3 content_cart_order_totals col-cont">
          <div class="contentTotals">
            <div class="title_section_summary text-center">
              Resumen
            </div>
            <table class="contentOtTotals">
              <tbody>
                <tr class="ot_subtotal_0">
                  <td class=" texto-destacado">
                    Subtotal:
                  </td>
                  <td>
                    <div class="recuadroGris order-total-out" style="text-align:right;">
                      $26990
                    </div>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <hr class="separatorTotals">
                  </td>
                </tr>
                <tr class="ot_total_0">
                  <td class="textOrder texto-destacado">
                    Total:
                  </td>
                  <td>
                    <div class="recuadroGris order-total-out" style="text-align:right;">
                      <strong>$26990</strong>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="buttonAction text-center action-shopping-cart">
              <a id="tdb1" href="#">
                <span class="btn ">
                  Finalizar Compra
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Carrito-->

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
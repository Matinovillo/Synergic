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
    <!-- Cart -->

    <div class="cart_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cart_container">
                        <div class="cart_title">Carrito de Compras</div>
                        <div class="cart_items">
                            <ul class="cart_list p-0">
                                <li class="cart_item clearfix">
                                    <div class="cart_item_image"><img src="../img/pc.png" alt=""></div>
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                        <div class="cart_item_name cart_info_col">
                                            <div class="cart_item_title">Producto</div>
                                            <div class="cart_item_text">
                                            <a href="">
                                            <p>
                                                    Pc AMD Gamer ZEN Kronos
                                                    Ryzen 5 3400G
                                                    Ssd 240Gb 8GB (2x4gb) |
                                            </p>
                                            </a>
                                            </div>
                                        </div>

                                        <div class="cart_item_quantity cart_info_col">
                                            <div class="cart_item_title">Cantidad</div>
                                            <div class="cart_item_text mt-lg-4">
                                            <form action="">
                                            <div class="form-group">
                                                <input type="number" value="1" class="form-control inp-cant">
                                            </div>
                                            </form>
                                            </div>
                                        </div>
                                        <div class="cart_item_price cart_info_col">
                                            <div class="cart_item_title">Precio</div>
                                            <div class="cart_item_text mt-lg-4">$2000</div>
                                        </div>
                                        <div class="cart_item_total cart_info_col">
                                            <div class="cart_item_title">Sub Total</div>
                                            <div class="cart_item_text mt-lg-4">$2000</div>
                                        </div>
                                        <div class="cart_item_total cart_info_col">
                                            <div class="cart_item_title">Quitar del carrito</div>
                                            <div class="cart_item_text mt-lg-4 text-center">
                                              <button><i class="fas fa-cart-arrow-down h4 cart-down"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart_item clearfix">
                                    <div class="cart_item_image"><img src="../img/intelpc.jpg" alt=""></div>
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                        <div class="cart_item_name cart_info_col">
                                            <div class="cart_item_title">Producto</div>
                                            <div class="cart_item_text">
                                                <p>
                                                <a href="#">
                                                PC INTEL Desing PRO CORE I7 9700 Nvidia Geforce Rtx 2060
                                                </a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="cart_item_quantity cart_info_col">
                                            <div class="cart_item_title">Cantidad</div>
                                            <div class="cart_item_text mt-lg-4">
                                            <form action="">
                                            <div class="form-group">
                                                <input type="number" value="1" class="form-control inp-cant">
                                            </div>
                                            </form>
                                            </div>
                                        </div>
                                        <div class="cart_item_price cart_info_col">
                                            <div class="cart_item_title">Precio</div>
                                            <div class="cart_item_text mt-lg-4">$2000</div>
                                        </div>
                                        <div class="cart_item_total cart_info_col">
                                            <div class="cart_item_title">Sub Total</div>
                                            <div class="cart_item_text mt-lg-4">$2000</div>
                                        </div>
                                        <div class="cart_item_total cart_info_col">
                                            <div class="cart_item_title">Quitar del carrito</div>
                                            <div class="cart_item_text mt-lg-4 text-center">
                                             <button><i class="fas fa-cart-arrow-down h4 cart-down"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- ----------------------------------------------------------------------- -->

                        <!-- Order Total -->
                        <div class="order_total">
                            <div class="order_total_content text-md-right col-12">
                                <div class="order_total_title">Total: </div>
                                <div class="order_total_amount">$2000</div>
                            </div>

                        </div>
                        <div class="cart_buttons mt-sm-auto mt-lg-4 mt-md-4 text-md-right">
                            <button type="button" class="button cart_button_clear">Vaciar Carrito</button>
                            <button type="button" class="button cart_button_checkout">Finalizar compra</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

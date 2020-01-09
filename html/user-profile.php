<?php 

?>

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


  <!--/Cuenta-->
  <div class="container-fluid">
    <!-- SECCION DE DATOS PERSONALES -->
    <div class="row mb-3 mt-5">
      <div class="col-xl-6">
        DATOS PERSONALES
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-10 col-md-5">
        <table class="table table-bordered">
          <tbody>
                    <tr>
                    <?php if(isset($_SESSION['email'])) : ?>
                      <th scope="row">E-mail:</th>
                      <td><?=$_SESSION['email']?></td>
                      <?php else : ?>
                      <th></th>
                      <td></td>
                      <?php endif; ?>
                    </tr>
                    <tr>
                    <?php if(isset($_SESSION['username'])) : ?>
                      <th scope="row">Nombre de usuario:</th>
                      <td><?=$_SESSION['username']?></td>
                      <?php else : ?>
                      <th></th>
                      <td></td>
                      <?php endif; ?>
                    </tr>
                    <tr>
                    <?php if(isset($_SESSION['avatar'])) : ?>
                      <img src="../avatars/<?=$_SESSION['avatar']?>" alt="">
                    <?php else : ?>
                      <?=''?>
                    <?php endif; ?>
                    </tr>
            </tbody>
        </table>

        <button type="button" class="btn btn-primary">Modificar</button>
      </div>
    </div>



    <!-- SECCION DE COMPRAS  -->

    <div class="row mb-3">
      <div class="col-xl-6">
        MIS COMPRAS
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-5">
        <table class="table table-bordered table-responsive table-hover">
          <thead>
            <tr>
              <th scope="row">PRODUCTO</th>
              <th scope="row">PRECIO</th>
              <th>PRECIO</tH>
              <th>FORMA DE PAGO</tH>
              <th>FECHA</tH>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lorem ipsum</td>
              <td>Lorem ipsum</td>
              <td>Lorem ipsum</td>
              <td>Lorem ipsum</td>
              <td>Lorem ipsum</td>
            </tr>
            <tr>
              <td>Lorem ipsum</td>
              <td>Lorem ipsum</td>
              <td>Lorem ipsum</td>
              <td>Lorem ipsum</td>
              <td>Lorem ipsum</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!--/Cuenta-->


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

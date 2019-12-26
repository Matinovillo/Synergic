<!DOCTYPE html>
<html lang="en" dir="ltr">

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

  <!--Contact-->
  <section class="contact">
    <div class="container">
      <form method="GET" class="mt-5">
        <div class="row ">
          <div class="contacto col-xs-12 col-md-4 mb-5 offset-lg-3 text-center">
            CONTACTANOS
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-xs-12 col-md-6 col-lg-4 offset-lg-2">
            <label for="inputname">Nombre</label>
            <input type="text" class="form-control" id="inputname">
          </div>
          <div class="form-group col-xs-12 col-md-6 col-lg-4">
            <label for="inputsname">Apellido</label>
            <input type="text" class="form-control" id="inputsname">
          </div>
        </div>
        <div class="form-row">
          <div class=" col-xs-12 col-md-6 col-lg-4 offset-lg-2">
            <label for="inputphone">Teléfono fijo</label>
            <input type="number" class="form-control" id="inputphone">
          </div>
          <div class=" col-xs-12 col-md-6 col-lg-4">
            <label for="inputcelph">Celular</label>
            <input type="number" class="form-control" id="inputcelph">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-xs-12 col-md-12 col-lg-8 offset-lg-2">
            <label for="">Mensaje</label>
            <textarea class="form-control" rows="6" name="comentario"></textarea>
            <button type="submit" class="btn btn-contact mt-2">Enviar</button>
          </div>
        </div>

      </form>
    </div>
  </section>
  <!--/Contact-->

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
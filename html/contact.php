<?php



$nombre = "";
$apellido = "";
$telefono = "";
$celular = "";
$comentario = "";
$condicion = true;
$frase_nombre = "";
$frase_apellido = "";
$frase_telefono = "";
$frase_celular = "";
$frase_comentario = "";

if($_POST) {

  // VALIDACION DEL NOMBRE
  if(strlen($_POST["inputname"]) == "") {
    $frase_nombre = "Complete el campo nombre";
    $condicion = false;
  }

  else {
    $nombre = $_POST["inputname"];
  }

  // VALIDACION DEL APELLIDO
  if(strlen($_POST["inputsname"]) == "") {
    $frase_apellido = "Complete el campo apellido";
    $condicion = false;
  }

  else {
    $apellido = $_POST["inputsname"];
  }

  // VALIDACION DEL TELEFONO FIJO

  if($_POST["inputphone"] == "") {
    $frase_telefono = "Debe proveer un telefono";
    $condicion = false;
  }
  else if(!is_numeric($_POST["inputphone"])) {
    $frase_telefono =  "El teléfono debe contener solo números";
    $condicion = false;
  }
  else {
    $telefono = $_POST["inputphone"];
  }

  //VALIDACION DEL CELULAR

  if($_POST["inputcelph"]) {

    if(!is_numeric($_POST["inputcelph"])) {
      $frase_celular = "El celular debe contener solo números";
      $condicion = false;
    }

    else {
    $celular = $_POST["inputcelph"];
    }
  }


  //VALIDACION DEL COMENTARIO

  if(strlen($_POST["comentario"]) == "") {
    $frase_comentario = "Escriba un comentario";
    $condicion = false;
  }

  else {
    $comentario = $_POST["comentario"];
  }

  if($condicion) {
    $CONTACTO = ["nombre" => $_POST["inputname"],
                "apellido" => $_POST["inputsname"],
                "telefono" => $_POST["inputphone"],
                "ceular" => $_POST["inputcelph"],
                "mensaje" => $_POST["comentario"]];

    $CONTACTOS_JSON = file_get_contents("../json/contactos.txt");
    $CONTACTOS = json_decode($CONTACTOS_JSON,true);
    $CONTACTOS[] = $CONTACTO;
    $CONTACTOS_JSON = json_encode($CONTACTOS);
    file_put_contents("../json/contactos.txt",$CONTACTOS_JSON);

    $nombre = "";
    $apellido = "";
    $telefono = "";
    $celular = "";
    $comentario = "";

    $ocultar = "d-none";
    $mostrar = "d-block";
  }

}


?>






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

      <!-- MENSAJE DE CONSULTA RECIBIDA -->

      <div class="row">
        <div class="contacto mensaje col-xs-12 col-md-9 mb-5 mt-5 offset-lg-3 text-center d-none <?=$mostrar?>">
          TU MENSAJE HA SIDO ENVIADO.<br>
          En breve enviaremos una respuesta a tu consulta.
        </div>
      </div>

      <!-- FORMULARIO DE CONTACTO-->

      <form method="POST" class="mt-5 <?=$ocultar?>">
        <div class="row ">
          <div class="contacto  col-xs-12 col-md-6  mb-5 offset-lg-3 text-center">
            CONTACTANOS
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-xs-12 col-md-6 col-lg-4 offset-lg-2">
            <label for="inputname">Nombre</label>
            <input type="text" class="form-control warning" name = "inputname" id="inputname" value = "<?= $nombre?>" placeholder = "<?= $frase_nombre?>">
          </div>
          <div class="form-group col-xs-12 col-md-6 col-lg-4">
            <label for="inputsname">Apellido</label>
            <input type="text" class="form-control warning" name = "inputsname" id="inputsname" value = "<?= $apellido?>" placeholder = "<?= $frase_apellido?>">
          </div>
        </div>
        <div class="form-row">
          <div class=" col-xs-12 col-md-6 col-lg-4 offset-lg-2">
            <label for="inputphone">Teléfono fijo</label>
            <input type="phone" class="form-control  warning" name = "inputphone" id="inputphone" value = "<?= $telefono?>" placeholder = "<?= $frase_telefono?>">
          </div>
          <div class=" col-xs-12 col-md-6 col-lg-4">
            <label for="inputcelph">Celular</label>
            <input type="phone" class="form-control warning" name = "inputcelph" id="inputcelph" value = "<?= $celular?>" placeholder = "<?= $frase_celular?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-xs-12 col-md-12 col-lg-8 offset-lg-2">
            <label for="">Mensaje</label>
            <textarea class="form-control  warning" rows="6" name="comentario" placeholder = "<?= $frase_comentario?>"><?=$comentario?></textarea>
            <button type="submit" class="btn btn-primary mt-2">Enviar</button>
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

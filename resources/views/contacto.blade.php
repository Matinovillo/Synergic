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
if($_POST["inputphone"]) {
  if(!is_numeric($_POST["inputphone"])) {
    $frase_telefono =  "El teléfono debe contener solo números";
    $condicion = false;
  }
  else {
    $telefono = $_POST["inputphone"];
  }
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

    $CONTACTOS_JSON = file_get_contents("../files/contactos.json");
    $CONTACTOS = json_decode($CONTACTOS_JSON,true);
    $CONTACTOS[] = $CONTACTO;
    $CONTACTOS_JSON = json_encode($CONTACTOS);
    file_put_contents("../files/contactos.json",$CONTACTOS_JSON);

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


@include('layouts.header')
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
  @include('layouts.footer')
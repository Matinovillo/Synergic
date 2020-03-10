

@include('layouts.configTop')
@include('layouts.header')
  <!--Contact-->
  <section class="contact">
    <div class="container">

      <!-- MENSAJE DE CONSULTA RECIBIDA -->

      <div class="row">
        <div class="contacto mensaje col-xs-12 col-md-9 mb-5 mt-5 offset-lg-3 text-center d-none ">
          TU MENSAJE HA SIDO ENVIADO.<br>
          En breve enviaremos una respuesta a tu consulta.
        </div>
      </div>

      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
      </div>

      <!-- FORMULARIO DE CONTACTO-->

      <form method="POST" class="mt-5">
        <div class="row ">
          <div class="contacto  col-xs-12 col-md-6  mb-5 offset-lg-3 text-center">
            CONTACTANOS
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-xs-12 col-md-6 col-lg-4 offset-lg-2">
            <label for="inputname">Nombre</label>
            <input type="text" class="form-control warning" name = "inputname" id="inputname" value = "" placeholder = "">
          </div>
          <div class="form-group col-xs-12 col-md-6 col-lg-4">
            <label for="inputsname">Apellido</label>
            <input type="text" class="form-control warning" name = "inputsname" id="inputsname" value = "" placeholder = "">
          </div>
        </div>
        <div class="form-row">
          <div class=" col-xs-12 col-md-6 col-lg-4 offset-lg-2">
            <label for="inputphone">Teléfono fijo</label>
            <input type="phone" class="form-control  warning" name = "inputphone" id="inputphone" value = "" placeholder = "">
          </div>
          <div class=" col-xs-12 col-md-6 col-lg-4">
            <label for="inputcelph">Celular</label>
            <input type="phone" class="form-control warning" name = "inputcelph" id="inputcelph" value = "" placeholder = "">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-xs-12 col-md-12 col-lg-8 offset-lg-2">
            <label for="">Mensaje</label>
            <textarea class="form-control  warning" rows="6" name="comentario" placeholder = "">ñ</textarea>
            <button type="submit" class="btn btn-primary mt-2">Enviar</button>
          </div>
        </div>

      </form>
    </div>
  </section>
  <!--/Contact-->
  @include('layouts.footer')
  @include('layouts.configBot')
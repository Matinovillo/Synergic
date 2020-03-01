@include('layouts.header')


@if (Route::has('login'))
 @auth
 <div class="container">
  <div class="row mt-5">
      <div class="col-xl-4">
        <div class="profile-card">
          <div class="row">
            <div class="col-xl-12 text-center my-2">
              <h3 class="profile-name">{{auth()->user()->nombre}} {{auth()->user()->apellido}}</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 text-center">
            <img class="profile-avatar" src="/storage/{{$foto->nombre}}" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 text-left p-5">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-id-card mr-2"></i>Mis datos</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-heart mr-2"></i>Mis productos favoritos</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-shopping-bag mr-2"></i>Mis compras</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-user-cog mr-2"></i>Modificar mis datos</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-8">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h2 class="text-muted p-2">Mis datos</h2>
            <div class="row p-4">
              <div class="col-xl-6">
                <h5 class="text-muted">Nombre</h5>
              <p class="h6">{{auth()->user()->nombre}}</p>
              </div>
              <div class="col-xl-6">
                <h5 class="text-muted">Apellido</h5>
                <p class="h6">{{auth()->user()->apellido}}</p>
              </div>
            </div>
            <div class="row mt-4 p-4">
              <div class="col-xl-6">
                <h5 class="text-muted">Email</h5>
                <p class="h6">{{auth()->user()->email}}</p>
              </div>
              <div class="col-xl-6">
                <h5 class="text-muted">Domicilio</h5>
                <p class="h6">{{auth()->user()->domicilio}}</p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div>

      </div>

  </div>
</div>

@else
    <section class="account-sec">
      <div class="container">
        <div class="row"></div>
        <div class="col-xl-12 account-logo text-center" >
          <a href="index.php"><img src="../img/logo.png" alt=""></a>
        </div>
        <div class="col-xl-12 text-center account-text">
          <h3>
            ¿Ya tenes una cuenta? <a href="login.php">¡Ingresa aca!</a>
            Si todavia no estas registrado <a href="register form.php">¡Registrate!</a>
          </h3>
        </div>
      </div>
    </section>
    @endauth
 @endif







    <!-- SECCION DE DATOS PERSONALES -->
    {{-- <div class="row mb-3 mt-5">
      <div class="col-xl-6">
        DATOS PERSONALES
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-10 col-md-5">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th scope="row">E-mail:</th>
            <td>{{ auth()->user()->nombre }}</td>
            </tr>
            <tr>
              <th scope="row">Nombre de usuario:</th>
              <td></td>
            </tr>
            <tr>
              <img src="" alt="">
            </tr>
          </tbody>
        </table>

        <button type="button" class="btn btn-primary" action="">Modificar</button>
      </div>
    </div> --}}



    <!-- SECCION DE COMPRAS  -->

    {{-- <div class="row mb-3">
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
  </div> --}}
  
















  


@include('layouts.footer')
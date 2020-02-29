@include('layouts.header')


  <!--Register-->
  <section class="register-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Registro</h5>
              <form class="form-signin" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                
                <div class="form-label-group">
                  <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" autocomplete="nombre" autofocus>
                  <label for="nombre">{{ __('Nombre') }}</label>
                  @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-label-group">
                    <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}" autocomplete="apellido" autofocus>
                    <label for="apellido">{{ __('Apellido') }}</label>
                    @error('apellido')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-label-group">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ old('email') }}" autocomplete="email">
                  <label for="email">Direccion de Email</label>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <hr>

                <div class="form-label-group">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" autocomplete="new-password">
                  <label for="password">{{ __('Contraseña') }}</label>
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-label-group">
                  <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder ="Confirmar contraseña" autocomplete="new-password">
                  <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
                </div>

                <div class="form-group">
                    <label for="avatar">Imagen de usuario</label>
                    <input type="file" name="avatar" class="form-control-file" id="avatar">
                </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrarse</button>
                
                <button type="button" class="btn btn-user-log my-2 bg-light text-primary" data-toggle="modal"
                  data-target="#exampleModalLong">
                  Ya tenes una cuenta? Ingresa.
                </button>
                <hr class="my-4">
                <button class="btn btn-lg btn-google2 btn-block text-uppercase" type="submit"><i
                    class="fab fa-google mr-2"></i>Registrarse con Google</button>
                <button class="btn btn-lg btn-facebook2 btn-block text-uppercase" type="submit"><i
                    class="fab fa-facebook-f mr-2"></i>Registrarse con Facebook</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Register-->


  @include('layouts.footer')
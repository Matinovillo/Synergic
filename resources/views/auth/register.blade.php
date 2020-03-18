@include('layouts.configTop')
@include('layouts.header')

  
  <section class="banner">
    <div class="container">
      
      <div class="row register-head">
        <div class="col-4">
          <h5 class="text-muted"><i class="fas fa-user-plus h6"></i> Registro</h5>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <h6 class="reg-title m-0">Cliente nuevo</h6>
        </div>
      </div>

      <div class="row register-body-card my-3 mb-5 ">
          <div class="col-12">
            <form class="form-signin" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
              @csrf
              {{--  --}}
                <div class="form-row">
                  {{--  --}}
                  <div class="col-md-6 mb-3">
                   <label for="email">Direccion de Email</label>
                   <div class="input-group">
                     <div class="input-group-prepend">
                       <span class="input-group-text" id="inputGroupPrepend">@</span>
                     </div>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ old('email') }}" autocomplete="email">
                   @error('email')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                     </span>
                   @enderror
                   </div>
                 </div>
                </div>
              {{-- -------------------------- --}}
             
                {{--  --}}
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="nombre">{{ __('Nombre') }}</label>
                  <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}" autocomplete="nombre" autofocus>
                  @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                {{--  --}}
                <div class="col-md-4 mb-3">
                  <label for="apellido">{{ __('Apellido') }}</label>
                  <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}" autocomplete="apellido" autofocus>
                    @error('apellido')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                {{--  --}}
                <div class="col-md-4 mb-3">
                  <label for="email">Fecha de nacimiento</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-calendar-alt"></i></span>
                    </div>
                     <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" placeholder="Fecha de nacimiento" value="{{ old('fecha_nacimiento') }}" autocomplete="fecha_nacimiento">
                  @error('fecha_nacimiento')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  </div>
                </div>
              </div>
              
                
             

              {{-- --------------------------- --}}
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="password">{{ __('Contraseña') }}</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" autocomplete="new-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                {{--  --}}
                <div class="col-md-6 mb-3">
                  <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
                  <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder ="Confirmar contraseña" autocomplete="new-password">
                </div>
                {{--  --}}
               
                <div class="col-md-6 mb-6">
                <div class="form-group">
                  <label for="avatar">Avatar de usuario</label>
                  <input type="file" name="avatar" class="form-control-file" id="avatar">
                </div>
              </div>
              <div class="col-md-12 mb-6">
                <div class="form-group">
                  <button class="btn btn-outline-primary" type="submit">Registrarse</button>
                </div>
              </div>
              </div>
              
            </form>
          </div>
      </div>


    </div>
  </section>

  @include('layouts.footer')
  @include('layouts.configBot')
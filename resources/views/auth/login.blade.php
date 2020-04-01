@extends('layouts.main')

@section('contenido')
  
<div class="page">
    <div class="contenido-login">
      <div class="envolver-login">
        <form class="formulario-login needs-validation" novalidate method="POST" name="signin-form" action="{{ route('login') }}">
            @csrf
          <a href="/" class="logo-img m-auto">
            <img src="../img/logo.png" alt="">
          </a>
          
          <div class="formulario-campos">
            <input id="email" type="email" class="campos form-control @error('email') is-invalid @enderror"  name="email" placeholder="E-Mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <span class="focus-campo"></span>
            <span class="simbolo-campo">
              <span><i class="far fa-user"></i></span>
            </span>
            
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="invalid-feedback">
              Por favor, Ingrese el E-Mail.
            </div>
            
          </div>

          <div class="formulario-campos">
            <input id="password" type="password" class="campos form-control @error('password') is-invalid @enderror"  name="password" placeholder="Contraseña" required autocomplete="current-password">
            <span class="focus-campo"></span>
            <span class="simbolo-campo">
              <span><i class="fas fa-lock"></i></span>
            </span>
            
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="invalid-feedback">
              Por favor, ingrese la contraseña.
            </div>
          </div>

          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="custom-control-label chck-bx" for="remember">Recuerdame</label>
          </div>

          <div class="contenidod-login-formulario-btn">
            <button class="login-formulario-btn" type="submit">
                {{ __('Iniciar sesion') }}
            </button>
          </div>

          <div class="text-center w-full no-acount">
            <a href="{{ route('password.request') }}">
            @if (Route::has('password.request'))
              {{ __('¿Olvidaste tu contraseña?') }}
            </a>
            @endif
          </div>

          <a href="#" class="btn-face">
            <i class="fab fa-facebook"></i>
            Facebook
          </a>

          <a href="#" class="btn-google">
            <img src="../img/icon-google.png" alt="Google">
            Google
          </a>

          <div class="text-center w-full no-acount">
            <span class="txt1">
              ¿No tienes una cuenta?
            </span>

            <a class="register" href="/register">
              Regístrate
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

  @endsection

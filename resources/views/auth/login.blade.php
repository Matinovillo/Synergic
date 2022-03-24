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
    <link rel="stylesheet" href="/fonts/css webfont/all.min.css">

    {{-- owlcarousel --}}
    <link rel="stylesheet" href="/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="/owl/owl.theme.default.min.css">
    <!-- Secciones CSS-->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/navmenu.css">

    <title>Synergic || Tienda tecno</title>
</head>

<body>
    <div class="page">
        <div class="contenido-login">
            <div class="envolver-login">
                <form class="formulario-login needs-validation" novalidate method="POST" name="signin-form"
                    action="{{ route('login') }}">
                    @csrf
                    <a href="/" class="logo-img m-auto">
                        <img src="../img/logo.png" alt="">
                    </a>

                    <div class="formulario-campos">
                        <input id="email" type="email" class="campos form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="E-Mail" value="{{ old('email') }}" required autocomplete="email"
                            autofocus>
                        <span class="focus-campo"></span>
                        <span class="simbolo-campo">
                            <span><i class="far fa-user"></i></span>
                        </span>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                    </div>

                    <div class="formulario-campos">
                        <input id="password" type="password"
                            class="campos form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Contraseña" required autocomplete="current-password">
                        <span class="focus-campo"></span>
                        <span class="simbolo-campo">
                            <span><i class="fas fa-lock"></i></span>
                        </span>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label chck-bx" for="remember">Recuerdame</label>
                    </div>

                    <div class="contenidod-login-formulario-btn">
                        <button class="btn btn-lg btn-primary w-100" type="submit">
                            Iniciar sesion
                        </button>
                    </div>

                    <div class="text-center w-full no-acount">
                        <a href="{{ route('password.request') }}">
                            @if (Route::has('password.request'))
                                {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                        @endif
                    </div>


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


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    {{-- owlcarousel --}}
    <script src="/owl/owl.carousel.min.js"></script>
    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>

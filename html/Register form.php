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
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/navmenu.css">

  <title>Synergic || Tienda tecno</title>
</head>

<body>

<?php 
  include("header.php");
?>


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
              <form class="form-signin">
                <div class="form-label-group">
                  <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                  <label for="inputUserame">Nombre de usuario</label>
                </div>

                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                  <label for="inputEmail">Direccion de Email</label>
                </div>

                <hr>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Contraseña</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                  <label for="inputConfirmPassword">Confirmar Contraseña</label>
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
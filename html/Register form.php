<?php
// session_start();
require_once '../drivers/validaciondata.php';

$registerErrors = [];
if($_POST) {
  $registerErrors = validarFormulario();

  if(count($registerErrors) == 0) {
        //Guardar Avatar
        $extension = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $temp = $_FILES["avatar"]["tmp_name"];
        $nuevaRuta = dirname(__DIR__);
        $nuevaRuta = $nuevaRuta . "\avatars/";
        $fileName = "avatar_" . uniqid() . "." . $extension;
        move_uploaded_file($temp, $nuevaRuta.$fileName);

        //Register del Usuario
        $newUser = [
        "username" => trim($_POST["username"]),
        "email" => trim($_POST["email"]),
        "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
        "avatar" => $fileName
        ];
        
        $paginaInicio = file_get_contents("../files/usuarios.json");
        $jsonUsers = json_decode($paginaInicio,true);
        array_push($jsonUsers, $newUser);
        $newUser = json_encode($jsonUsers);
        file_put_contents("../files/usuarios.json", $newUser);

            header('location: login.php');
            exit;
  }
}
 ?>

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
              <form class="form-signin" method="post" action="Register form.php" enctype="multipart/form-data">
                <div class="form-label-group">
                  <input type="text" name="username" id="inputUserame" class="form-control" placeholder="Username"
                  value="<?php 
                  if(count($registerErrors) != 0)
                  echo persistirDatos('username', $registerErrors) ?>"
                   >
                  <label for="inputUserame">Nombre de usuario</label>
                  <?php
                    if (isset($registerErrors["username"])) {
                      foreach ($registerErrors['username'] as $error) {
                        echo "<small class='text-danger'>" . $error . "</small><br>" ;
                      }
                    }
                   ?>
                </div>

                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="<?php 
                  if(count($registerErrors) != 0)
                  echo persistirDatos('email', $registerErrors) ?>">
                  <label for="inputEmail">Direccion de Email</label>
                  <?php
                    if (isset($registerErrors["email"])) {
                      foreach ($registerErrors['email'] as $error) {
                        echo "<small class='text-danger'>" . $error . "</small><br>" ;
                      }
                    }
                   ?>
                </div>

                <hr>

                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                  <label for="inputPassword">Contraseña</label>
                  <?php
                    if (isset($registerErrors["password"])) {
                      foreach ($registerErrors['password'] as $error) {
                        echo "<small class='text-danger'>" . $error . "</small><br>" ;
                      }
                    }
                   ?>
                </div>

                <div class="form-label-group">
                  <input type="password" name="repassword" id="inputRepassword" class="form-control" placeholder="Password">
                  <label for="inputRepassword">Confirmar Contraseña</label>
                  <?php
                    if (isset($registerErrors["repassword"])) {
                      foreach ($registerErrors['repassword'] as $error) {
                        echo "<small class='text-danger'>" . $error . "</small><br>" ;
                      }
                    }
                   ?>
                </div>

                <div class="form-group">
                    <label for="avatar">Imagen de usuario</label>
                    <input type="file" name="avatar" class="form-control-file" id="avatar">
                    <?php
                      if (isset($registerErrors['avatar'])) {
                        foreach ($registerErrors['avatar'] as $error) {
                          echo "<small class='text-danger'>" . $error . "</small><br>" ;
                        }
                      }
                     ?>
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
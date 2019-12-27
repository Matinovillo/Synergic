<?php
error_reporting(E_ALL ^ E_NOTICE); //desactiva los errores NOTICE
require_once '../drivers/helpers.php'; //funcion para hacer un var_dump
require_once '../drivers/validaciondata.php'; // funcion para recuperar los datos en caso de error
$errores = [];


//validar nombre
if (isset($_POST["username"])) {
  if (empty($_POST["username"])) {
    $errores['username'][] = "Este campo es obligatorio";
  }
  if (strlen($_POST["username"]) < 4){
    $errores['username'][] = "Este campo debe tener como minimo 4 caracteres";
  }

}

//validar email
if (isset($_POST["email"])) {
  if (empty($_POST["email"])) {
    $errores['email'][] = "Este campo es obligatorio";
  }
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errores['email'][] = "Debes ingresar un email valido";
  }
}
//validar password
if (isset($_POST["password"])) {
  if (empty($_POST["password"])) {
    $errores['password'][] = "Este campo es obligatorio";
  }

  if (strlen($_POST["password"]) < 6){
      $errores['password'][] = "La contraseña debe tener al menos 6 caracteres";
  }
}

//validar confirmar password
if (isset($_POST["confirmpassword"])) {
  if (empty($_POST["confirmpassword"])) {
    $errores['confirmpassword'][] = "Este campo es obligatorio";
  }

  if ($_POST["password"] != $_POST["confirmpassword"]) {
    $errores['confirmpassword'][] = "Las contraseñas deben coincidir";
  }
}

//validar avatar
if (!empty($_FILES['avatar'])) {
  if ($_FILES['avatar']['size'] > 3000000 ) {
    $errores['avatar'][] = "El tamaño maximo es de 3mb";
  }

  $nombreArchivo = $_FILES["avatar"]["name"];
  $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
  $extension = strtolower($extension);
  if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
        $errores['avatar'][] = "el formato de archivo no es valido";
      }

  }


if (count($errores) == 0) {
  //Guardar Avatar
  //1. Obtener la extension del archivo.
$extension = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
  //2. obtener la ruta del archivo.
$temp = $_FILES["avatar"]["tmp_name"];
  //3. Construir la ruta donde queremos enviar la imagen.
$nuevaRuta = dirname(__DIR__);
$nuevaRuta = $nuevaRuta . "/avatars/";
  //4. darle un nombre al archivo (uniqid otorga un string random)
$fileName = "avatar_" . uniqid() . "." . $extension;
  //5. mover el archivo
move_uploaded_file($temp, $nuevaRuta.$fileName);

//Register del Usuario
  $newUser = [
    "username" => trim($_POST["username"]),
    "email" => trim($_POST["email"]),
    "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
    "avatar" => $fileName
  ];

  $newUser = json_encode($newUser);
  file_put_contents("../json/usuarios.json", $newUser, FILE_APPEND);
}
pre($_FILES);
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
                  if(count($errores) != 0)
                  echo persistirDatos('username', $errores) ?>"
                   >
                  <label for="inputUserame">Nombre de usuario</label>
                  <?php
                    if (isset($errores["username"])) {
                      foreach ($errores['username'] as $error) {
                        echo "<small class='text-danger'>" . $error . "</small><br>" ;
                      }
                    }
                   ?>
                </div>

                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="<?php 
                  if(count($errores) != 0)
                  echo persistirDatos('email', $errores) ?>">
                  <label for="inputEmail">Direccion de Email</label>
                  <?php
                    if (isset($errores["email"])) {
                      foreach ($errores['email'] as $error) {
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
                    if (isset($errores["password"])) {
                      foreach ($errores['password'] as $error) {
                        echo "<small class='text-danger'>" . $error . "</small><br>" ;
                      }
                    }
                   ?>
                </div>

                <div class="form-label-group">
                  <input type="password" name="confirmpassword" id="inputConfirmPassword" class="form-control" placeholder="Password">
                  <label for="inputConfirmPassword">Confirmar Contraseña</label>
                  <?php
                    if (isset($errores["confirmpassword"])) {
                      foreach ($errores['confirmpassword'] as $error) {
                        echo "<small class='text-danger'>" . $error . "</small><br>" ;
                      }
                    }
                   ?>
                </div>

                <div class="form-group">
                    <label for="avatar">Imagen de usuario</label>
                    <input type="file" name="avatar" class="form-control-file" id="avatar">
                    <?php
                      if (isset($errores['avatar'])) {
                        foreach ($errores['avatar'] as $error) {
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
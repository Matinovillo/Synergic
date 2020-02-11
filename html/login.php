<?php
 session_start();
 require_once '../drivers/validaciondata.php';
 $loginErrors = [];
 if($_POST) {
     $loginErrors = validarFormulario();
     if(count($loginErrors) == 0) {
         $usuariosRegistrados = file_get_contents("../files/usuarios.json");
         $usuariosRegistrados = json_decode($usuariosRegistrados,true);      
         foreach($usuariosRegistrados as $usuario) {
             if($_POST['email'] == $usuario['email']) {
                 if(password_verify($_POST['password'], $usuario['password'])) {
                     $_SESSION['email'] = $usuario['email'];
                     $_SESSION['username']= $usuario['username'];
                     $_SESSION['avatar'] = $usuario['avatar'];
                     if(isset($_POST['recuerdame']) && $_POST['recuerdame'] == "1") {
                         //setcookie(nombreCookie, valorCookie, tiempoCookie);
                         setcookie("usuarioEmail", $usuario['email'], time() + 60 * 60 * 24 * 7, "/");  
                     }
                     header('Location: index.php');
                     exit;
                 }
             }
         }
     }
 }
?>
<!DOCTYPE html>
<html>

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
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/navmenu.css">

  <title>Synergic || Tienda tecno</title>
</head>

<body>

  <div class="page">
    <div class="contenido-login">
      <div class="envolver-login">
        <form class="formulario-login needs-validation" novalidate method="POST" name="signin-form"
          action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>">
          <a href="index.php" class="logo-img m-auto">
            <img src="../img/logo.png" alt="">
          </a>
          <div class="formulario-campos">
            <input class="campos form-control" type="text" name="email" placeholder="E-Mail" value="<?=PersistirDatos('email',$loginErrors) ?>" required>
            <span class="focus-campo"></span>
            <span class="simbolo-campo">
              <span><i class="far fa-user"></i></span>
            </span>
            <?php
                   if(isset($loginErrors['email'])) {
                    foreach($loginErrors['email'] as $error){
                    echo '<small class="text-danger">' . $error . '</small><br>';
                          }
                      } else {
                   echo "";
                  }
            ?>
            <div class="invalid-feedback">
              Por favor, Ingrese el E-Mail.
            </div>
            
          </div>

          <div class="formulario-campos">
            <input class="campos form-control" type="password" name="password" placeholder="Contraseña" value=""
              required>
            <span class="focus-campo"></span>
            <span class="simbolo-campo">
              <span><i class="fas fa-lock"></i></span>
            </span>
            <?php
                   if(isset($loginErrors['password'])) {
                    foreach($loginErrors['password'] as $error){
                    echo '<small class="text-danger">' . $error . '</small><br>';
                          }
                      } else {
                   echo "";
                  }
            ?>
            <div class="invalid-feedback">
              Por favor, ingrese la contraseña.
            </div>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="recuerdame" class="custom-control-input" id="customCheck1" value="1">
            <label class="custom-control-label chck-bx" for="customCheck1">Recuerdame</label>
          </div>

          <div class="contenidod-login-formulario-btn">
            <button class="login-formulario-btn" type="submit" name="login" value="login" formnovalidate>
              Iniciar Sesión
            </button>
          </div>

          <div class="text-center w-full no-acount">
            <a href="#">
              ¿Olvidaste tu contraseña?
            </a>
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

            <a class="register" href="Register form.php">
              Regístrate
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--/Modal Login-->

  <!-- <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script> -->

</body>

</html>
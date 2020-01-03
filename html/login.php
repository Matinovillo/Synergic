
<?php
   session_start();
   setcookie("usuario", "", time() - 3600); //send browser command remove sid from cookie
   //session_destroy(); //remove sid-login from server storage
   //session_write_close();
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
              <?php
                $username = "";
                $password = "";
                $msjUserValildate = "";
                $msjPassValidate = "";
                $error = "";
                $paginaInicio = file_get_contents("../files/usuarios.json");

                $jsonUsers = json_decode($paginaInicio, true);

               if (isset($_POST["login"])){
                  $username = $_POST["username"];
                  $password = $_POST["password"];

                  if (!empty($username) && !empty($password)){
                    
                    foreach ($jsonUsers as $user => $value) {
                      /*echo "<pre>";
                        print_r($user . ':[');
                        echo "</pre>";*/
                      foreach ($value as $key => $value2) {
                      /*echo "<pre>";
                        print_r('{' .$key .' => ' . $value2["password"] .'},');
                        echo "</pre>";
*/
                          if ($value2["username"] != $username){
                           $msjUserValildate = "<li>El usuario ingresado no existe.</li>";
                           $error  = "mostrar-error";
                          }else{
                             $error = "ocultar-error";
                             $msjUserValildate = "";
                          }

                          if(!password_verify($password, $value2["password"])){
                            $msjPassValidate = "<li>La contraseña ingresada es incorrecta.</li>";
                            $error  = "mostrar-error";
                          }else{
                            $error = "ocultar-error";
                            $msjPassValidate = "";
                          }
                        }
                      }
                    }

                      if($error == "ocultar-error") {
                             $_SESSION["valid"] = true;
                             $_SESSION["timeout"] = time();
                             $_SESSION["username"] = $username;                             
                             setcookie("usuario", $username, time() + 3600);

                             foreach ($jsonUsers as $user => $value) {
                              foreach ($value as $key => $value2) {
                              
                                if($value2["username"] == $username){
                                  $_SESSION["nombre"] = "oasis";
                                }
                              }
                            }
                             header('Location: index.php');
                      }
                  
                  }
             
              ?>
              <div class="envolver-login">
                <div class="<?=$error?>">          
                    <?=$msjUserValildate?>
                    <?=$msjPassValidate?>
                </div>
                <form class="formulario-login needs-validation" novalidate method="POST" name="signin-form" action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>">
                  <a href="index.php" class="logo-img m-auto">
                    <img src="../img/logo.png" alt="">
                  </a>
                  <div class="formulario-campos">
                    <input class="campos form-control" type="text" name="username" placeholder="Usuario" value="" required>
                    <span class="focus-campo"></span>
                    <span class="simbolo-campo">
                      <span><i class="far fa-user"></i></span>
                    </span>
                    <div class="invalid-feedback">
                      Por favor, ingrese el usuario.
                    </div>
                  </div>

                  <div class="formulario-campos">
                    <input class="campos form-control" type="password" name="password" placeholder="Contraseña" value="" required>
                    <span class="focus-campo"></span>
                    <span class="simbolo-campo">
                      <span><i class="fas fa-lock"></i></span>
                    </span>
                    <div class="invalid-feedback">
                      Por favor, ingrese la contraseña.
                    </div>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
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

  <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
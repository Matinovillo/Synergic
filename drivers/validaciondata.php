<?php

function persistirDatos ($campo, $arrayDeErrores){
  if (isset($arrayDeErrores[$campo])) {
    return "";
  }
  else {
    if (isset($_POST[$campo])) {
        return  $_POST[$campo];
    }
  }
}

function pre($algo) {
  echo "<pre>";
  var_dump($algo);
  echo "</pre>";
}

function validarFormulario() {
  $errores = [];

  // Validamos el input de Nombre:
  if(isset($_POST['username'])) {
      if(empty($_POST['username'])) {
          $errores['username'][] = "Este campo es obligatorio.";
      }
      if(strlen($_POST['username']) < 6) {
          $errores['username'][] = "Tu nombre de usuario debe tener al menos 6 caracteres.";
      }
  }

  // Validamos el input Email:
  if(isset($_POST['email'])) {
      if(empty($_POST['email'])) {
          $errores['email'][] = "Este campo es obligatorio.";
      }
      if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $errores['email'][] = "El email ingresado no es valido.";
      }
  }

  // Validamos el input Password:
  if(isset($_POST['password'])) {
      if(empty($_POST['password'])) {
          $errores['password'][] = "Este campo es obligatorio.";
      }
      if(strlen($_POST['password']) < 6) {
          $errores['password'][] = "La contraseña debe tener al menos 6 caracteres.";
      }
  }

  // Validamos el input Repassword:
  if(isset($_POST['repassword'])) {
      if(empty($_POST['repassword'])) {
          $errores['repassword'][] = "Este campo es obligatorio.";
      }
      if($_POST['password'] != $_POST['repassword']) {
      $errores['repassword'][] = "Las contraseñas deben coincidir.";
      }
  }
  //validar avatar
  if (!empty($_FILES['avatar']['name'])) {
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

  return $errores;
}




function guardarAvatar($imagen){
  $nombre = $imagen["avatar"]["name"];
  $ext = pathinfo($nombre,PATHINFO_EXTENSION);
  $archivoOrigen = $imagen["avatar"]["tmp_name"];
  $archivoDestino = dirname(__DIR__);
  $archivoDestino = $archivoDestino. "\avatars/";
  $avatar = uniqid();
  $archivoDestino = $archivoDestino.$avatar;
  $archivoDestino = $archivoDestino.".".$ext;
  move_uploaded_file($archivoOrigen,$archivoDestino);
  $avatar = $avatar.".".$ext;
  return $avatar;
}




 ?>

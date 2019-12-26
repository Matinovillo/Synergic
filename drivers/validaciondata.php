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

 ?>

<?php
    session_start();
    
    setcookie("user", "", -1);
    setcookie("img", "", -1);
    setcookie("usuarioEmail", "", -1);
    session_destroy();
    header("Location: index.php");
?>

<?php
require_once "../../Class/Usuarios.php";

$id = $_GET['editar'];
$usuario = Usuario::getUser($id);
if ($_POST) {
  $datos = [
    'nombre' => $_POST['nombre'],
    'apellido' => $_POST['apellido'],
    'contrasenia' => $_POST['contrasenia'],
    'fechaAlta' =>$_POST['fechaAlta'],
    'fechaNacimiento' =>$_POST['fechaNacimiento'],
    // 'id_foto' => $_POST['id_foto'],
    // 'id_sexo' => $_POST['id_sexo'],
    // 'id_sexo' => $_POST['id_domicilio]
  ];
  $saved = Usuario::editUser($datos,$id);

}

 ?>



<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Font Awesome icons CSS-->
  <link rel="stylesheet" href="../../fonts/css webfont/all.min.css">

  <!-- Secciones CSS-->
  <link rel="stylesheet" href="../../css/styles.css">
  <link rel="stylesheet" href="../../css/login.css">
  <link rel="stylesheet" href="../../css/navmenu.css">

  <title>Synergic || Tienda tecno</title>
</head>

<body>

<?php include("admin2.php") ?>


    <div class="row justify-content-center my-5">
      <div class="col-10">
        <h2>Modificar Usuario</h2>
        <form method="post">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control" value="<?=$usuario->getNombre();?>" name="nombre">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Apellido:</label>
                <input type="text" class="form-control" value="<?=$usuario->getApellido();?>" name="apellido">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Contraseña:</label>
                <input type="text" class="form-control" value="<?=$usuario->getContrasenia();?>" name="contrasenia">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Fecha de Alta:</label>
                <input type="text" class="form-control" name="fechaAlta" value="<?=$usuario->getFechaAlta();?>">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Fecha de nacimiento:</label>
                <input type="text" class="form-control" name="fechaNacimiento" value="<?=$usuario->getFechaNacimiento();?>">
              </div>
            </div>


            <div class="col-6">
              <div class="form-group">
                <label>Foto:</label>
                <input name="id_foto" type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <?php if (isset($saved)): ?>
      <div
        class="alert <?php echo $saved ? 'alert-success' : 'alert-danger'?>"
      >
        <?php echo $saved ? '¡Producto actualizado con éxito!' : '¡No se pudo actualizar el producto!' ?>
      </div>
    <?php endif; ?>








  <!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <!-- navmenu -->
</body>

</html>

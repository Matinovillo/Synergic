<?php
include_once("../../Class/Crud.php");


if (isset($_POST['añadir'])) {
  $datos = [
    'nombre' => $_POST['nombre'],
    'descripcion' => $_POST['descripcion'],
    'precio' => $_POST['precio'],
    'categoria' => $_POST['categoria'],
    'foto' => $_POST['foto'],
    'stock' => $_POST['stock']
  ];
 Crud::crearProducto($datos);
}

if (isset($_POST['añadirUsuario'])) {
  $datos = [
    'nombre' => $_POST['nombre'],
    'apellido' => $_POST['apellido'],
    'fechaDeNacimiento' => $_POST['fechaDeNacimiento'],
    'sexo' => $_POST['sexo'],
    'telefono' => $_POST['telofono'],
    'celular' => $_POST['celular'],
    'domicilio' => $_POST['domicilio']
  ];
  var_dump($datos);
 Crud::crearUsuario($datos);
}


?>


<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php if ($_GET['producto']): ?>
      <?='
      <div class="container">
      <h1>Añadir producto</h1>
              <form method="POST">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Descripcion</label>
                  <input name="descripcion" type="text" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Precio</label>
                  <input name="precio" type="text" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Categoria</label>
                  <input name="categoria" type="text" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Foto</label>
                  <input name="foto" type="text" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Stock</label>
                  <input name="stock" type="text" class="form-control" id="exampleInputPassword1" required>
              </div>

              <button type="submit" name="añadir" class="btn btn-primary">Añadir</button>

      </div>'


       ?>

       <?php if (isset($_POST["añadir"])): ?>
         <div class="alert alert-success text-center aling middle" role="alert">
         Producto Añadido
         </div>
       <?php endif; ?>
       <span><a href="admin.php" class="p-4 ml-5 h6">Volver al CRUD</a></span>
       </form>
    <?php endif; ?>







    <?php if ($_GET['usuarios']==1): ?>
      <?='
      <div class="container">
      <h1>Añadir Usuario</h1>
              <form method="POST">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Apellido</label>
                  <input name="apellido" type="text" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Fecha de nacimiento</label>
                  <input name="fechaDeNacimiento" type="date" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">sexo</label>
                  <input name="sexo" type="text" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Telefono</label>
                  <input name="telefono" type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Celular</label>
                  <input name="celular" type="text" class="form-control" id="exampleInputPassword1" required>
              </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">domicilio</label>
                  <input name="domicilio" type="text" class="form-control" id="exampleInputPassword1" required>
              </div>

              <button type="submit" name="añadirUsuario" class="btn btn-primary">Añadir</button>
              <?php endif; ?>
              <span><a href="test.php" class="p-4 ml-5 h6">Volver al CRUD</a></span>
              </form>
      </div>'

       ?>
    <?php endif; ?>












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include_once('../../Class/Crud.php');



$id = $_GET['editar'];
$sql = "SELECT * from usuarios where id = $id ";
$query = Conexion::conectar()->prepare($sql);
$query->execute();
$usuario= $query->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['editarUser'])) {
  $datos = [
    'nombre' => $_POST['nombre'],
    'apellido' => $_POST['apellido'],
    'fechaDeNacimiento' => $_POST['fechaDeNacimiento'],
    'sexo' => $_POST['sexo'],
    'telefono' => $_POST['telefono'],
    'celular' => $_POST['celular'],
    'domicilio' => $_POST['domicilio']
  ];
 Crud::editarUsuario($datos,$id);
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


    <div class="container">
      <h1>Editar Producto</h1>
            <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input name="nombre" type="text" class="form-control" value="<?=$usuario['nombre']?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Apellido</label>
                <input name="apellido" type="text" class="form-control" value="<?=$usuario['apellido'] ?>" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">fechaDeNacimiento</label>
                <input name="fechaDeNacimiento" type="date" class="form-control" value="<?=$usuario['fechaDeNacimiento']?>" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Sexo</label>
                <input name="sexo" type="text" class="form-control" value="<?=$usuario['sexo']?>" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Telefono</label>
                <input name="telefono" type="text" class="form-control" value="<?=$usuario['telefono']?>" autocomplete=""id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Celular</label>
                <input name="celular" type="text" class="form-control" value="<?=$usuario['celular']?>" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Domicilio</label>
                <input name="domicilio" type="text" class="form-control" value="<?=$usuario['domicilio']?>" id="exampleInputPassword1" required>
            </div>

            <button type="submit" name="editarUser" class="btn btn-primary">Editar</button>

            <span><a href="admin.php" class="p-4 ml-5 h6">Volver al CRUD</a></span>
            </form>
    </div>'

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

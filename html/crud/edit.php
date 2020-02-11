<?php
include_once('../../Class/Crud.php');



$id = $_GET['editar'];
$sql = "SELECT * from productos where id = $id ";
$query = Conexion::conectar()->prepare($sql);
$query->execute();
$producto= $query->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['editar'])) {
  $datos = [
    'nombre' => $_POST['nombre'],
    'descripcion' => $_POST['descripcion'],
    'precio' => $_POST['precio'],
    'categoria' => $_POST['categoria'],
    'foto' => $_POST['foto'],
    'stock' => $_POST['stock']
  ];
 Crud::editarProducto($datos,$id);
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
                <input name="nombre" type="text" class="form-control" value="<?=$producto['nombre']?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Descripcion</label>
                <input name="descripcion" type="text" class="form-control" value="<?=$producto['descripcion'] ?>" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Precio</label>
                <input name="precio" type="text" class="form-control" value="<?=$producto['precio']?>" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Categoria</label>
                <input name="categoria" type="text" class="form-control" value="<?=$producto['categoria']?>" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Foto</label>
                <input name="foto" type="text" class="form-control" value="<?=$producto['foto']?>" autocomplete=""id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Stock</label>
                <input name="stock" type="text" class="form-control" value="<?=$producto['stock']?>" id="exampleInputPassword1" required>
            </div>

            <button type="submit" name="editar" class="btn btn-primary">Editar</button>

            <span><a href="admin.php" class="p-4 ml-5 h6">Volver al CRUD</a></span>
            </form>
    </div>'

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

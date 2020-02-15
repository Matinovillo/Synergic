<?php
require_once "../../Class/Categorias.php";

if (isset($_GET['eliminar'])) {
  $id=$_GET['eliminar'];
  $delete = Categorias::deleteCategoria($id);

}

$categorias = Categorias::MostrarCategoria();





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

<?php include_once("admin2.php"); ?>


<section class="admin-table-sec my-2">
  <div class="container-fluid">


  <div class="row">
    <div class="col-xl-12">
  <h2 class="text-center">Listado de Categorias</h2>

  <?php if (isset($delete)): ?>
    <div
      class="alert <?php echo $delete ? 'alert-success' : 'alert-danger'?>"
    >
      <?php echo $delete ? '¡Categoria Eliminada!' : '¡No se pudo eliminar la categoria!' ?>
    </div>
  <?php endif; ?>

  <table class="table shadow">
    <thead class="adm-th bg-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Categoria Padre</th>
        <th scope="col">Orden</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>

        <?php foreach ($categorias as $categoria): ?>
          <tr scope="row">
  					<th scope="row"><?php echo $categoria->getId(); ?></th>
  					<td><?php echo $categoria->getNombre(); ?></td>
  					<td><?php echo $categoria->getDescripcion(); ?></td>
  					<td><?php echo $categoria->getIdCategoriPadre(); ?></td>
  					<td><?php echo $categoria->getOrden(); ?></td>
            <td>
              <a title="editar" href="editCategoria.php?editar=<?php echo $categoria->getId(); ?>"><button class="action-button-edit"><i class="fas fa-pen"></i></button></a>
              <a title="eliminar" href="?eliminar=<?php echo $categoria->getId(); ?>"><button class="action-button-delete"><i class="fas fa-trash-alt"></i></button></a>
            </td>
          </tr>
        <?php endforeach; ?>

    </tbody>
  </table>
  </div>
  <div class="col-xl-12">
  <a href="crearCategoria.php"> <button type="button" class="btn btn-outline-dark btn"><i class="fas fa-plus mr-2"></i>Crear Categoria</button></a>
  <a href="restoreCategoria.php"> <button type="button" class="btn btn-outline-dark btn"><i class="fas fa-plus mr-2"></i>Restaurar Categoria</button></a>
  </div>

  </div>
  </div>
</section>







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

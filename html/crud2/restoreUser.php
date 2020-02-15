<?php
  include("../../class/Usuarios.php");


  if (isset($_POST['searcher'])) {
   $usuarios = Usuario::buscarUser($_POST['searcher']);
  }

  if (isset($_GET['restore'])) {
    $id=$_GET['restore'];
    $restore = Usuario::restoreUser($id);
  }

  $usuarios= Usuario::getDeletedUsers();

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
<section class="admin-table-sec my-2">
  <div class="container-fluid">


  <div class="row">
    <div class="col-xl-12">
  <h2 class="text-center">Listado de Usuarios</h2>
  <?php if (isset($restore)): ?>
    <div
      class="alert <?php echo $restore ? 'alert-success' : 'alert-danger'?>"
    >
      <?php echo $restore ? '¡Usuario Restaurado!' : '¡No se pudo Restaurar el Usuario!' ?>
    </div>
  <?php endif; ?>
  <table class="table shadow">
    <thead class="adm-th bg-dark">
      <tr>
        <th scope="col">Usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Fecha de alta</th>
        <th scope="col">Fecha de nacimiento</th>
        <th scope="col">Sexo</th>
        <th scope="col">Foto</th>
        <th scope="col">Domicilio</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>

        <?php foreach ($usuarios as $usuario): ?>
          <tr scope="row">
  					<th scope="row"><?php echo $usuario->getUsuario(); ?></th>
  					<td><?php echo $usuario->getNombre(); ?></td>
  					<td><?php echo $usuario->getApellido(); ?></td>
  					<td><?php echo $usuario->getContrasenia(); ?></td>
  					<td><?php echo $usuario->getFechaAlta(); ?></td>
  					<td><?php echo $usuario->getFechaNacimiento(); ?></td>
            <td><?php echo $usuario->getIdSexo(); ?></td>
            <td><?php echo $usuario->getIdFoto(); ?></td>
            <td><?php echo $usuario->getIdDomicilio(); ?></td>
            <td>
              <a title="Restaurar" href="restoreUser.php?restore=<?php echo $usuario->getUsuario(); ?>"><button class="action-button-edit"><i class="fas fa-trash-restore"></i></button></a>
            </td>
          </tr>
        <?php endforeach; ?>

    </tbody>
  </table>


  <div class="col-xl-12">
  <a href="restoreUser.php"> <button type="button" class="btn btn-outline-dark btn"><i class="fas fa-plus mr-2"></i>Restaurar Usuario</button></a>
  </div>


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

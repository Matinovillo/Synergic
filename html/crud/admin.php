
<?php
include_once "../../Class/Crud.php";

function pre($algo){
  echo "<pre>";
  var_dump($algo);
  echo "</pre>";
}
  $obj2 = new Crud();
  $productos = $obj2->mostrarProductos();

  $obj = new Crud();
  $usuarios = $obj->mostrarUsuarios();
 ?>




<!doctype html>
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


  <div class="row admin-panel">
    <div class="col-xl-2 col-l-3 col-md-4 col-sm-12 admin-list">
      <div class="h-logo px-4">
        <a href="index.php" class="logo-img">
          <img src="../../img/logo.png" alt="">
        </a>
      </div>

      <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link adm-item" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
          aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-dolly mr-2"></i>Productos</a>
        <a class="nav-link adm-item" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-users mr-2"></i>Usuarios</a>
        <a class="nav-link adm-item" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
          aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-clipboard-list mr-2"></i>Pedidos</a>
        <a class="nav-link adm-item" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
          aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-code-branch mr-2"></i>Categorias</a>
      </div>
    </div>

    <div class="col-xl-10 col-l-9 col-md-8 col-sm-12 admin-content">
      <div class="tab-content" id="v-pills-tabContent">
          <!-- ------------------AREA DE PRODUCTOS------------- -->
        <div class="tab-pane fade show active table-responsive adm-con-panel" id="v-pills-home" role="tabpanel"
          aria-labelledby="v-pills-home-tab">
          
            <h3 class="p-3">Reporte de productos</h3>
          
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" href="#">Añadir Producto</a>
              </li>
            </ul>
          <!-- <a href="insert.php?producto=1"><i class="fas fa-plus"></i>Añadir Producto</a> -->



          <table class="table shadow">

            <thead class="adm-th">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Categoria</th>
                <th scope="col">Foto</th>
                <th scope="col">Stock</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>

            <tbody>


              <?php foreach ($productos as $producto): ?>
              <tr scope="row">
                <th><?php echo $producto['id']; ?></th>
                <td><?php echo $producto['nombre'];?></td>
                <td><?php echo $producto['descripcion']; ?></td>
                <td><?php echo $producto['precio']; ?></td>
                <td><?php echo $producto['categoria']; ?></td>
                <td><?php echo $producto['foto']; ?></td>
                <td><?php echo $producto['stock']; ?></td>
                <td>
                <a href="edit.php?editar=<?php echo $producto['id'] ?>">  <button class="action-button-edit"><i class="fas fa-pen"></i></button></a>
                <a href="">  <button class="action-button-delete"><i class="fas fa-trash-alt"></i></button></a>
                </td>
              </tr>
              <?php endforeach; ?>


            </tbody>
          </table>

        </div>
                <!-- ------------------AREA DE USUARIOS------------- -->
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" name="usuarios" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
        <form class="" action="index.html" method="get">
          <a href="insert.php?usuarios=1"><button type="button" class="btn btn-outline-secondary ml-5 mt-2"><i class="fas fa-plus"></i>Añadir Usuario </button></a>
        </form>

          <table class="table">
            <thead class="adm-th">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Sexo</th>
                <th scope="col">Telefono</th>
                <th scope="Email">Celular</th>
                <th scope="Domicilio">Domicilio</th>
                <th scope="col">Acciones</th>

              </tr>
            </thead>
            <tbody>


              <?php foreach ($usuarios as $usuario): ?>
              <tr scope="row">
                <th><?php echo $usuario['id']; ?></th>
                <td><?php echo $usuario['nombre'];?></td>
                <td><?php echo $usuario['apellido']; ?></td>
                <td><?php echo $usuario['fechaDeNacimiento']; ?></td>
                <td><?php echo $usuario['sexo']; ?></td>
                <td><?php echo $usuario['telefono']; ?></td>
                <td><?php echo $usuario['celular']; ?></td>
                <td><?php echo $usuario['domicilio']; ?></td>
                <td>
                  <a href="editUser.php?editar=<?=$usuario['id'] ?>">  <button class="action-button-edit"><i class="fas fa-pen"></i></button></a>
                  <button class="action-button-delete"><i class="fas fa-trash-alt"></i></button>
                </td>
              </tr>

              <?php endforeach; ?>


            </tbody>
          </table>

        </div>
        <!-- ------------------AREA DE PEDIDOS------------- -->
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...
        </div>
        <!-- ------------------AREA DE CATEGORIAS------------- -->
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...
        </div>
      </div>
    </div>
  </div>





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

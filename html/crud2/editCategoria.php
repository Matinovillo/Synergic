
<?php
require_once "../../Class/Categorias.php";

$id = $_GET['editar'];

if ($_POST) {
  $datos = [
    'nombre' => $_POST['nombre'],
    'descripcion' => $_POST['descripcion'],
    'idCategoriaPadre' => $_POST['idCategoriaPadre'],
    'orden' =>$_POST['orden']
  ];
  $saved = Categorias::editCategory($datos,$id);

}

$categoria = Categorias::getCategory($id);
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
        <h2>Modificar Categoria</h2>
        <form method="post">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control" value="<?=$categoria->getNombre();?>" name="nombre">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Descripcion:</label>
                <input type="text" class="form-control" value="<?=$categoria->getDescripcion();?>" name="descripcion">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Categoria Padre:</label>
                <input type="text" class="form-control" value="<?=$categoria->getIdCategoriPadre();?>" name="idCategoriaPadre">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Orden:</label>
                <input type="text" class="form-control" value="<?=$categoria->getOrden();?>" name="orden">
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
        <?php echo $saved ? '¡Categoria actualizada con éxito!' : '¡No se pudo actualizar la categoria!' ?>
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


<?php
require_once "../../Class/Productos.php";
require "../../Class/Categorias.php";
$id = $_GET['editar'];
$categorias = Categorias::MostrarCategoria();

if ($_POST) {
  $datos = [
    'nombre' => $_POST['nombre'],
    'descripcion' => $_POST['descripcion'],
    'precio' => $_POST['precio'],
    'stock' =>$_POST['stock'],
    'id_foto' => $_POST['id_foto'],
    'id_categoria' => $_POST['id_categoria']
  ];
  $saved = Productos::editProduct($datos,$id);

}

$producto = Productos::getProduct($id);
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
        <h2>Modificar Producto</h2>

        <?php if (isset($saved)): ?>
        <div class="alert alert-dismissible fade show <?php echo $saved ? 'alert-success' : 'alert-danger'?>">
          <?php echo $saved ? '¡Producto guardado con éxito!' : '¡No se pudo guardar el producto!'?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <?php endif; ?>

        <form method="post">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control" value="<?=$producto->getNombre();?>" name="nombre">
                <?php if (isset($saved)): ?>
                <small class="text-danger"><?php if(!$_POST['nombre']): ?>
                  El campo nombre no puede estar vacio
                <?php endif; ?></small>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Descripcion:</label>
                <input type="text" class="form-control" value="<?=$producto->getDescripcion();?>" name="descripcion">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Precio:</label>
                <input type="text" class="form-control" value="<?=$producto->getPrecio();?>" name="precio">
                <?php if (isset($saved)): ?>
                <small class="text-danger"><?php if(!$_POST['precio']): ?>
                  El campo precio no puede estar vacio
                <?php endif; ?></small>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label>Stock:</label>
                <input type="text" class="form-control" name="stock" value="<?=$producto->getStock();?>">
                <?php if (isset($saved)): ?>
                <small class="text-danger"><?php if(!$_POST['stock']): ?>
                  El campo nombre stock no puede estar vacio
                <?php endif; ?></small>
                <?php endif; ?>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label>Categoria:</label>
                <select class="form-control" name="id_categoria">
                  <option value="">Elegí una Categoria</option>
                  <?php foreach ($categorias as $categoria): ?>
                    <option value="<?=$categoria->getId()?>"><?=$categoria->getNombre()?></option>
                  <?php endforeach; ?>
                </select>
                <?php if (isset($saved)): ?>
                <small class="text-danger"><?php if(!$_POST['id_categoria']): ?>
                  Tenes que elegir una categoria!
                <?php endif; ?></small>
                <?php endif; ?>
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

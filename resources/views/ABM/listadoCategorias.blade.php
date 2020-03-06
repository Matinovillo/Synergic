@include('layouts.configTop')
@include('layouts.adminHeader')

<section class="admin-table-sec my-2">
    <div class="container-fluid">
  
  
    <div class="row">
      <div class="col-xl-12">
    <h2 class="text-center text-muted">Listado de Categorias</h2>
  
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
  
          @foreach ($categorias as $categoria)
            <tr scope="row">
                        <th scope="row">{{$categoria->id}}</th>
                        <td>{{$categoria->nombre}}</td>
                        <td>{{$categoria->descripcion}}</td>
                        <td>{{$categoria->padre->nombre}}</td>
                        <td>{{$categoria->orden}}</td>
              <td>
                <a title="editar" href=""><button class="action-button-edit"><i class="fas fa-pen"></i></button></a>
                <a title="eliminar" href=""><button class="action-button-delete"><i class="fas fa-trash-alt"></i></button></a>
              </td>
            </tr>
          @endforeach
  
      </tbody>
    </table>
    </div>
    <div class="col-xl-12">
    <a href="crearCategoria"> <button type="button" class="btn btn-outline-dark btn"><i class="fas fa-plus mr-2"></i>Crear Categoria</button></a>
    <a href="restoreCategoria.php"> <button type="button" class="btn btn-outline-dark btn"><i class="fas fa-plus mr-2"></i>Restaurar Categoria</button></a>
    </div>
  
    </div>
    </div>
  </section>

  @include('layouts.configBot')
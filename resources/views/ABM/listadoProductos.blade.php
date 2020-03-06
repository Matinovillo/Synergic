@include('layouts.configTop')
@include('layouts.adminHeader')

<section class="admin-table-sec my-2">
  <div class="container-fluid">


  <div class="row">
    <div class="col-xl-12">
  <h2 class="text-center">Listado de productos</h2>
    <table class="table shadow">
      <thead class="adm-th bg-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Precio</th>
          <th scope="col">Stock</th>
          <th scope="col">Categoria</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
              <tbody>
                @foreach($productos as $producto)
                  <tr scope="row">
                    <th scope="row">{{$producto->id}}</th>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->categoria->nombre}}</td>
                    <td>
                      
                      <a title="editar" href="/admin/editarProducto/{{$producto->id}}"><button class="action-button-edit"><i class="fas fa-pen"></i></button></a>
                      <form action="/borrarProducto" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$producto->id}}">
                      <a title="eliminar"><button type="submit" class="action-button-delete"><i class="fas fa-trash-alt"></i></button></a>
                    </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
    </table>
  {{ $productos->links() }}

  </div>
  <div class="col-xl-12">
  <a href="/admin/crearProducto"> <button type="button" class="btn btn-outline-dark btn"><i class="fas fa-plus mr-2"></i>Crear Producto</button></a>
  </div>

  </div>
  </div>
</section>

@include('layouts.configBot')
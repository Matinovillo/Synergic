@extends('ABM.crudLayout')

@section('productos', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Listado de productos')

@section('content')
<div class="container-fluid">
  <div class="row">
   <div class="col-12">
      <div class="list-head my-2">
          <div class="row">
            <div class="col-3 d-flex">
            <form action="" method="GET">
                <div class="form-group d-flex">
                  <select class="form-control" name="orderBy" onchange="javascript:handleSelect(this)">
                    <option value="">Ordenar por:</option>
                    <option value="orderBy=id&">Id</option>
                    <option value="orderBy=nombre&">Nombre</option>
                    <option value="orderBy=precio&">Precio</option>
                    <option value="orderBy=categoria&">Categoria</option>
                  </select>
                </div>
            </form>
              
            </div>
            <div class="col-3">

            </div>
            <div class="col-6">
              <form method="GET" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>





<section class="admin-table-sec my-2">
  <div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
    <table class="table table-responsive">
      <thead class="adm-th bg-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Precio</th>
          <th scope="col">Stock</th>
          <th scope="col">Categoria</th>
          {{-- <th scope="col">Imagenes</th> --}}
          <th scope="col">Acciones</th>
        </tr>
      </thead>
              <tbody class="align-middle">
                @foreach($productos as $producto)
                  <tr scope="row">
                    <th scope="row">{{$producto->id}}</th>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->categoria->nombre}}</td>
                    {{-- <td>{{count($imagenes)}}</td> --}}
                    <td class="d-flex">
                      
                      <a title="editar" class="mr-2" href="/admin/editarProducto/{{$producto->id}}"><button class="action-button-edit"><i class="fas fa-pen"></i></button></a>
                      <form action="/borrarProducto" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$producto->id}}">
                      <a title="eliminar"><button type="submit" class="action-button-delete" onclick="return ConfirmarDelete()"><i class="fas fa-trash-alt"></i></button></a>
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

<script>
  function ConfirmarDelete(){
    var respuesta = confirm('¿Estas seguro que deseas eliminar este producto');
    if(respuesta == true){
      return true;
    }else{
      return false;
    }
  }
</script>

<script type="text/javascript">
  function handleSelect(elem)
  {
  window.location = "?"+elem.value;
  }
  </script>
@endsection


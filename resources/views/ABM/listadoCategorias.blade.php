@extends('ABM.crudLayout')

@section('categorias', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Categorias')

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
                    <option value="orderBy=id">Id</option>
                    <option value="orderBy=nombre">Nombre</option>
                    <option value="orderBy=padre">Categoria padre</option>
                    <option value="orderBy=orden">Orden</option>
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
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
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
                        <td>@foreach ($categoria->padre()->get() as $padre)
                            {{$padre->nombre}}
                            @endforeach
                        </td>
                        <td>{{$categoria->orden}}</td>
              <td class="d-flex">
                <a title="editar" href="/admin/editarCategoria/{{$categoria->id}}"><button class="action-button-edit mr-2"><i class="fas fa-pen"></i></button></a>
                <form action="/borrarCategoria" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{$categoria->id}}">
                <a title="eliminar"><button type="submit" class="action-button-delete" onclick="return ConfirmarDelete()"><i class="fas fa-trash-alt" ></i></button></a>
              </form>
              </td>
            </tr>
          @endforeach
  
      </tbody>
    </table>
    </div>
    {{ $categorias->links() }}
    </div>
    
  
    </div>
    </div>
  </section>

  <script>
    function ConfirmarDelete(){
      var respuesta = confirm('¿Estas seguro que deseas eliminar esta categoria?');
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

  
  
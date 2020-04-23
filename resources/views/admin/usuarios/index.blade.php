@extends('layouts.abm')

@section('usuarios', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Usuarios')

@section('content')

@if (session('success'))
       <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
          </div>
       </div>
@endif


@if (session('unauthorized'))
       <div class="col-sm-12">
        <div class="alert  alert-warning alert-dismissible fade show" role="alert">
            {{ session('unauthorized') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
          </div>
       </div>
@endif

<div class="container-fluid">
  <div class="row">
   <div class="col-12">
      <div class="list-head my-2">
          <div class="row">
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

  <table class="table table-light table-hover">
    <thead class="adm-th bg-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Fecha de registro</th>
        <th scope="col">Fecha de modificacion</th>
        <th scope="col">Roles</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>

        @foreach($usuarios as $usuario)
          <tr scope="row">
  					<th scope="row">{{$usuario->id}}</th>
  					<td>{{$usuario->nombre()}}</td>
  					<td>{{$usuario->email}}</td>
            <td>{{$usuario->created_at}}</td>
            <td>{{$usuario->updated_at}}</td>
            <td>{{implode('-', $usuario->roles()->get()->pluck('nombre')->toArray())}}</td>
            <td class="d-flex">
              @can('editar-usuario')
              <a title="editar" class="mr-2" href="{{ route('admin.usuarios.edit', $usuario->id) }}">
                <button class="btn btn-warning">
                  <i class="fas fa-pen"></i>
                </button>
              </a>
              @endcan
              @can('borrar-usuario')
            <form action="{{ route('admin.usuarios.destroy',$usuario) }}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></a>
            </form>
              @endcan
            </td>
          </tr>
        @endforeach

    </tbody>
  </table>
  </div>
  </div>
  </div>
</section>


<script>
  function ConfirmarDelete(){
    var respuesta = confirm('¿Estas seguro que deseas eliminar este usuario?');
    if(respuesta == true){
      return true;
    }else{
      return false;
    }
  }
</script>

@endsection
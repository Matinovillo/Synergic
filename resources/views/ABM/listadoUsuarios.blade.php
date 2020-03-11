@extends('ABM.crudLayout')

@section('usuarios', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'Usuarios')

@section('content')
  

<section class="admin-table-sec my-2">
  <div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">

  <table class="table">
    <thead class="adm-th bg-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Fecha de nacimiento</th>
        <th scope="col">Fecha de registro</th>
        <th scope="col">Fecha de modificacion</th>
        <th scope="col">Sexo</th>
        {{-- <th scope="col">Avatar</th> --}}
        <th scope="col">Domicilio</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>

        @foreach($usuarios as $usuario)
          <tr scope="row">
  					<th scope="row">{{$usuario->id}}</th>
  					<td>{{$usuario->nombre}}</td>
  					<td>{{$usuario->apellido}}</td>
  					<td>{{$usuario->email}}</td>
  					<td>{{$usuario->fecha_nacimiento}}</td>
                    <td>{{$usuario->created_at}}</td>
                    <td>{{$usuario->updated_at}}</td>
                    <td>{{$usuario->id_sexo}}</td>
                    {{-- <td>{{$usuario->foto->nombre}}</td> --}}
                    <td>{{$usuario->id_domicilio}}</td>
            <td class="d-flex">
              <a title="editar" class="mr-2" href=""><button class="action-button-edit"><i class="fas fa-pen"></i></button></a>
              <form action="/borrarUsuario" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$usuario->id}}">
              <a title="eliminar"><button type="submit" class="action-button-delete" onclick="return ConfirmarDelete()"><i class="fas fa-trash-alt"></i></button></a>
            </form>
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
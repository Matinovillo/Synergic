@extends('cuenta.cuenta')

@section('account-title', 'Modificar mis datos')
@section('modificar', 'active')
@section('account-content')
<form method="post">
    @csrf
    {{--  --}}
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="" class="text-muted">Nombre</label>
        <input type="text" class="form-control" value="{{auth()->user()->nombre}}" required name="nombre">
      </div>
      {{--  --}}
      <div class="col-md-4 mb-3">
        <label for="" class="text-muted">Apellido</label>
        <input type="text" class="form-control" id="" value="{{auth()->user()->apellido}}" required name="apellido">
      </div>
      {{--  --}}
      <div class="col-md-4 mb-3">
        <label for="" class="text-muted">E-mail</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
          </div>
          <input type="text" class="form-control" id="" value="{{auth()->user()->email}}" aria-describedby="inputGroupPrepend" required name="email">
        </div>
      </div>
      {{--  --}}
      <div class="col-md-4 mb-3">
        <label for="" class="text-muted">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="" value="{{auth()->user()->fecha_nacimiento}}" required name="fecha_nacimiento">
      </div>
    </div>
    {{--  --}}
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="" class="text-muted">Calle</label>
      <input type="text" class="form-control" id="" placeholder="Calle" name="calle" value="@if($domicilio){{$domicilio->calle}}@endif">
      </div>
      {{--  --}}
      <div class="col-md-3 mb-3">
        <label for="" class="text-muted">Numero</label>
        <input type="text" class="form-control" id="" placeholder="Numero" name="numero" value="@if($domicilio){{$domicilio->numero}}@endif">
      </div>
      {{--  --}}
      <div class="col-md-3 mb-3">
        <label for="" class="text-muted">Barrio</label>
        <input type="text" class="form-control" id="" placeholder="Barrio" name="barrio" value="@if($domicilio){{$domicilio->barrio}}@endif">
      </div>
       {{-- ------------------------------- --}}
    </div>
      {{--  --}}
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="" class="text-muted">Codigo postal</label>
          <input type="text" class="form-control" id="" placeholder="Barrio" name="codigo_postal" value="@if($domicilio){{$domicilio->codigo_postal}}@endif">
        </div>
        {{--  --}}
        <div class="col-md-3 mb-3">
          <div class="form-group">
            <label for="" class="text-muted">Provincia</label>
            <select class="form-control" id="" placeholder="Pronvincia" name="id_provincia">
             @if(auth()->user()->domicilio()->first() != null)
             <option selected value="{{ auth()->user()->domicilio()->first()->provincia()->first()->id }}"> {{ auth()->user()->domicilio()->first()->provincia()->first()->nombre }}</option>
             @foreach ($provincias as $provincia)
                    <option value="{{$provincia->id}}">{{$provincia->nombre}}</option>
              @endforeach
             @else
             <option value="">Provincias</option>
                @foreach ($provincias as $provincia)
                    <option value="{{$provincia->id}}">{{$provincia->nombre}}</option>
                 @endforeach
             @endif
            </select>
            </div>
        </div>
        <div class="col-md-6 mb-6">
          <div class="form-group ml-5">
            <label for="avatar" class="text-muted">Avatar</label>
            <input type="file" name="avatar" class="form-control-file" id="avatar">
          </div>
        </div>
      </div>
    <button class="btn btn-outline-info" type="submit">Guardar</button>
  </form>
@endsection
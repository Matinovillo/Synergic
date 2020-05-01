@extends('cuenta.cuenta')

@section('account-title', 'Modificar mis datos')
@section('modificar', 'active')
@section('account-content')
  {{-- alerta al editar producto --}}
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
<form method="post" class="needs-validation" novalidate>
	@csrf
	{{--  --}}
	<div class="form-row">
		<div class="col-md-4 mb-3">
			<label for="accountNombre" class="text-muted">Nombre</label>
			<input type="text" class="form-control  @error('nombre') is-invalid @enderror" value="{{auth()->user()->nombre}}" required name="nombre" id="accountNombre">
			<div class="invalid-feedback">
				@error('nombre')
                <strong class="text-danger">{{$message}}</strong>
            	@enderror
			</div>
		</div>
		{{--  --}}
		<div class="col-md-4 mb-3">
			<label for="accountApellido" class="text-muted">Apellido</label>
			<input type="text" class="form-control  @error('apellido') is-invalid @enderror" id="accountApellido" value="{{auth()->user()->apellido}}" required name="apellido">
			<div class="invalid-feedback">
				@error('apellido')
                <strong class="text-danger">{{$message}}</strong>
            	@enderror
			</div>
		</div>
		{{--  --}}
		<div class="col-md-4 mb-3">
			<label for="accountEmail" class="text-muted">E-mail</label>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroupPrepend">@</span>
				</div>
				<input type="text" class="form-control  @error('email') is-invalid @enderror" id="accountEmail" value="{{auth()->user()->email}}"
					aria-describedby="inputGroupPrepend" required name="email">
					<div class="invalid-feedback">
						@error('email')
						<strong class="text-danger">{{$message}}</strong>
						@enderror
					</div>
			</div>
		</div>
		{{--  --}}
		<div class="col-md-4 mb-3">
			<label for="accountFecha" class="text-muted">Fecha de nacimiento</label>
			<input type="date" class="form-control  @error('fecha_nacimiento') is-invalid @enderror" id="accountFecha" value="{{auth()->user()->fecha_nacimiento}}" required
				name="fecha_nacimiento">
				<div class="invalid-feedback">
					@error('fecha_nacimiento')
					<strong class="text-danger">{{$message}}</strong>
					@enderror
				</div>
		</div>
	</div>
	{{--  --}}
	<div class="form-row">
		<div class="col-md-6 mb-3">
			<label for="accountCalle" class="text-muted">Calle</label>
			<input type="text" class="form-control  @error('calle') is-invalid @enderror" id="accountCalle" placeholder="Calle" name="calle"
				value="@if($domicilio){{$domicilio->calle}}@endif">
				<div class="invalid-feedback">
					@error('calle')
					<strong class="text-danger">{{$message}}</strong>
					@enderror
				</div>
		</div>
		{{--  --}}
		<div class="col-md-3 mb-3">
			<label for="accountNumero" class="text-muted">Numero</label>
			<input type="text" class="form-control  @error('numero') is-invalid @enderror" id="accountNumero" placeholder="Numero" name="numero"
				value="@if($domicilio){{$domicilio->numero}}@endif">
				<div class="invalid-feedback">
					@error('numero')
					<strong class="text-danger">{{$message}}</strong>
					@enderror
				</div>
		</div>
		{{--  --}}
		<div class="col-md-3 mb-3">
			<label for="accountBarrio" class="text-muted">Barrio</label>
			<input type="text" class="form-control  @error('barrio') is-invalid @enderror" id="accountBarrio" placeholder="Barrio" name="barrio"
				value="@if($domicilio){{$domicilio->barrio}}@endif">
				<div class="invalid-feedback">
					@error('barrio')
					<strong class="text-danger">{{$message}}</strong>
					@enderror
				</div>
		</div>
		{{-- ------------------------------- --}}
	</div>
	{{--  --}}
	<div class="form-row">
		<div class="col-md-3 mb-3">
			<label for="accountCodPostal" class="text-muted">Codigo postal</label>
			<input type="text" class="form-control  @error('codigo_postal') is-invalid @enderror" id="accountCodPostal" placeholder="Barrio" name="codigo_postal"
				value="@if($domicilio){{$domicilio->codigo_postal}}@endif">
				<div class="invalid-feedback">
					@error('codigo_postal')
					<strong class="text-danger">{{$message}}</strong>
					@enderror
				</div>
		</div>
		{{--  --}}
		<div class="col-md-3 mb-3">
			<div class="form-group">
				<label for="accountProvincia" class="text-muted">Provincia</label>
				<select class="form-control  @error('id_provincia') is-invalid @enderror" id="accountProvincia" placeholder="Pronvincia" name="id_provincia">
					@if(auth()->user()->domicilio()->first() != null)
					<option selected value="{{ auth()->user()->domicilio()->first()->provincia()->first()->id }}">
						{{ auth()->user()->domicilio()->first()->provincia()->first()->nombre }}</option>
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
				<div class="id_provincia">
					@error('nombre')
					<strong class="text-danger">{{$message}}</strong>
					@enderror
				</div>
			</div>
		</div>
	</div>
	<button class="btn btn-primary" type="submit">Guardar</button>
</form>
@endsection
@extends('cuenta.cuenta')

@section('account-title', 'Mis datos')
@section('datos', 'active')
@section('account-content')


<div class="row">
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

    <div class="col-md-3 text-center">
        <img id="user-avatar" src="/storage/{{$foto->nombre}}" alt="">
    </div>
    <div class="col-md 9">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-4">
                        <b class="text-muted h6 font-weight-bolder font-weight-bold">Nombre completo:</b>
                    </div>
                    <div class="col-md-8 text-right">
                        {{auth()->user()->nombre()}}
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-4">
                        <b class="text-muted h6 font-weight-bold">E-mail:</b>
                    </div>
                    <div class="col-md-8 text-right">
                        {{auth()->user()->email}}
                    </div>
                </div>
                 
                
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-4">
                        <b class="text-muted h6 font-weight-bold">Fecha de nacimiento:</b>
                    </div>
                    <div class="col-md-8 text-right">
                        {{auth()->user()->fecha_nacimiento}}
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-4">
                        <b class="text-muted h6 font-weight-bold">Domicilio:</b>
                    </div>
                    <div class="col-md-8 text-right">
                        @if(isset($domicilio))
                        {{$domicilio->calle}} {{$domicilio->numero}} B° {{$domicilio->barrio}}
                        @else
                        <p class="text-danger"> Falta completar dato</p>
                        @endif
                        
                    </div>
                </div>
               
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-4">
                        <b class="text-muted h6 font-weight-bold">Provincia:</b>
                    </div>
                    <div class="col-md-8 text-right">
                        @if(isset($domicilio->provincia))
                        {{$domicilio->provincia->nombre}}
                        @else
                        <p class="text-danger">Falta completar dato</p> 
                        @endif
                    </div>
                </div>
                
            </li>
          </ul>
    </div>
</div>
@endsection
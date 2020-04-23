@extends('cuenta.cuenta')

@section('account-title', 'Mis pedidos')
@section('mispedidos', 'active')
@section('account-content')
@if (session('success'))
<div class="col-sm-12">
 <div class="alert alert-sucess alert-dismissible fade show" role="alert">
     {{ session('success') }}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
   </div>
</div>
@endif

@if (session('info'))
<div class="col-sm-12">
 <div class="alert alert-info alert-dismissible fade show" role="alert">
     {{ session('info') }}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
   </div>
</div>
@endif
@endsection
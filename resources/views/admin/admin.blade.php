@extends('layouts.abm')

@section('inicio', 'active')
@section('title', 'Admin Page')
@section('dashboard', 'inicio')

@section('content')



<div class="row">
   <!-- Card Item -->
   <div class="col-lg-3 col-md-6">
      <div class="card shadow-sm">
         <div class="card-body">
            <div class="d-flex flex-row align-items-center">
               <div class="h1 text-primary">
                  <i class="fas fa-user mx-2"></i>
               </div>
               <div class="h2 text-primary">
                +{{ count($newusers)}}
               </div>
               <div class="h5 text-muted mx-auto">
                   Usuarios<br>
                   nuevos Hoy
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Card Item -->
   <div class="col-lg-3 col-md-6">
    <div class="card shadow-sm">
       <div class="card-body">
          <div class="d-flex flex-row align-items-center">
             <div class="h1 text-primary">
                <i class="fas fa-exclamation mx-2"></i>
             </div>
             <div class="h2 text-primary">
              {{ $sinstock }}
             </div>
             <div class="h5 text-muted mx-auto ">
                Productos sin stock <br>
             <a href="{{route('admin.productos.index')}}">Ver productos</a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- Card Item -->
 <div class="col-lg-3 col-md-6">
    <div class="card shadow-sm">
       <div class="card-body">
          <div class="d-flex flex-row align-items-center">
             <div class="h1 text-primary">
                <i class="fas fa-store mx-2" ></i>
             </div>
             <div class="h2 text-primary">
              {{count($pedidos)}}
             </div>
             <div class="h5 text-muted mx-auto">
                 Pedidos <br>
             <a href="{{Route('admin.pedidos.index')}}">Ver pedidos</a>
             </div>
          </div>
          
       </div>
    </div>
 </div>
 <!-- Card Item -->
 <div class="col-lg-3 col-md-6">
    <div class="card shadow-sm">
       <div class="card-body">
          <div class="d-flex flex-row align-items-center">
             <div class="h1 text-primary">
                <i class="far fa-envelope mx-2"></i>
             </div>
             <div class="h2 text-primary">
              1
             </div>
             <div class="h5 text-muted mx-auto">
                 Mensajes <br>
                 <a href="">Ver mensajes</a>
             </div>
          </div>
       </div>
    </div>
 </div>
</div> 
  </section>

@endsection
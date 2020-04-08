@extends('layouts.main')


@section('contenido')
  
@if (Route::has('login'))
@auth
<div class="container">
 <div class="row mt-5">
     <div class="col-xl-4">
       <div class="profile-card">
         <div class="row">
           <div class="col-xl-12 text-center my-2">
             <h3 class="profile-name">{{auth()->user()->nombre}} {{auth()->user()->apellido}}</h3>
           </div>
         </div>
         <div class="row ">
           <div class="col-xl-12 text-center avatar-content">
           <img class="profile-avatar" src="/storage/{{$foto->nombre}}" alt="">
           </div>
         </div>
         <div class="row">
           <div class="col-xl-12 text-left p-5">
             <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
               <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-id-card mr-2"></i>Mis datos</a>
               <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-heart mr-2"></i>Mis productos favoritos</a>
               <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-shopping-bag mr-2"></i>Mis compras</a>
               <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-user-cog mr-2"></i>Modificar mis datos</a>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="col-xl-8">
       <div class="tab-content" id="v-pills-tabContent">

         <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
           <h2 class="text-muted p-2">Mis datos</h2>
           <div class="row p-4">
             <div class="col-xl-4">
               <h5 class="text-muted">•Nombre</h5>
             <p class="h6">
               {{auth()->user()->nombre}}
             </p>
             </div>
             <div class="col-xl-4">
               <h5 class="text-muted">•Apellido</h5>
               <p class="h6">{{auth()->user()->apellido}}</p>
             </div>
             <div class="col-xl-4">
               <h5 class="text-muted">•Fecha de nacimiento</h5>
               <p class="h6">{{auth()->user()->fecha_nacimiento}}</p>
             </div>
           </div>
           <div class="row mt-4 p-4">
             <div class="col-xl-4">
               <h5 class="text-muted">•Email</h5>
               <p class="h6">{{auth()->user()->email}}</p>
             </div>
           </div>
           <div class="row mt-4 p-4">
             <div class="col-xl-4">
               <h5 class="text-muted">•Calle</h5>
               @if(isset($domicilio))
             <p class="h6">{{$domicilio->calle}} {{$domicilio->numero}}</p>
               @else
               <p class="h6 text-muted">Falta completar dato</p>
               @endif
             </div>
             <div class="col-xl-4">
               <h5 class="text-muted">Barrio</h5>
               @if(isset($domicilio))
               <p class="h6">B° {{$domicilio->barrio}}</p>
               @else
               <p class="h6 text-muted">Falta completar dato</p>
               @endif
             </div>
             <div class="col-xl-4">
               <h5 class="text-muted">•Provincia</h5>
               @if(isset($domicilio->provincia))
             <p class="h6">{{$domicilio->provincia->nombre}}</p>
             @else
               <p class="h6 text-muted">Falta completar dato</p>
               @endif
             </div>
         </div>
         </div>
{{-- PRODUCTOS FAVORITOS --}}
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <div class="row">
          
          @foreach ($favs as $productos) 
          <div class="col-4"> 
          <div class="cards">
            <div class="card-slider card--1">
              <div class="card__img">
      
              </div>
              <div class="card__img--hover">
                <a href="{{route('productoDetail', str_replace(" ", "+", $productos->nombre))}}" class="producto-imagen-link">
                  <img class="card-img-top" src="/storage/{{$productos->fotos->first()->nombre}}" alt="">
                </a>
              </div>     
              <div class="card__info">
                <p class="card__title  text-center">
                  <a href="{{route('productoDetail', str_replace(" ", "+", $productos->nombre))}}">
                    {{substr($productos->nombre,0,20)}}...
                 </a>
                </p>
                Precio: <span class="card__category text-success">${{$productos->precio}}</span>
                <span class="card__category"><a href="{{route('cart.add', $productos->id)}}" class="card__author" title="author"><i class="fas fa-cart-plus"></i></a></span>
                <span class="card__category"><a href="{{route('favorito.destroy', $productos->id)}}" class="card__author text-danger" title="author"><i class="fas fa-heart"></i></a></span>
              </div>
            </div>
          </div> 
        </div> 
        @endforeach

      </div>
         </div>
{{-- MIS COMPTRAS --}}
         <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
             
         </div>



{{-- MODIFICAR MIS DATOS --}}
         <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
           <h2 class="text-muted p-2">Modificar mis datos</h2>
           <form class="p-5" method="post">
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
                       <option value="">provincia</option>
                          @foreach ($provincias as $provincia)
                              <option value="{{$provincia->id}}">{{$provincia->nombre}}</option>
                           @endforeach
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
         </div>
       </div>

     </div>

 </div>
</div>

@else
   <section class="account-sec">
     <div class="container">
       <div class="row"></div>
       <div class="col-xl-12 account-logo text-center" >
         <a href="index.php"><img src="../img/logo.png" alt=""></a>
       </div>
       <div class="col-xl-12 text-center account-text">
         <h3>
           ¿Ya tenes una cuenta? <a href="login.php">¡Ingresa aca!</a>
           Si todavia no estas registrado <a href="register form.php">¡Registrate!</a>
         </h3>
       </div>
     </div>
   </section>
   @endauth
@endif







   <!-- SECCION DE DATOS PERSONALES -->
   {{-- <div class="row mb-3 mt-5">
     <div class="col-xl-6">
       DATOS PERSONALES
     </div>
   </div>
   <div class="row mb-5">
     <div class="col-10 col-md-5">
       <table class="table table-bordered">
         <tbody>
           <tr>
             <th scope="row">E-mail:</th>
           <td>{{ auth()->user()->nombre }}</td>
           </tr>
           <tr>
             <th scope="row">Nombre de usuario:</th>
             <td></td>
           </tr>
           <tr>
             <img src="" alt="">
           </tr>
         </tbody>
       </table>

       <button type="button" class="btn btn-primary" action="">Modificar</button>
     </div>
   </div> --}}



   <!-- SECCION DE COMPRAS  -->

   {{-- <div class="row mb-3">
     <div class="col-xl-6">
       MIS COMPRAS
     </div>
   </div>
   <div class="row">
     <div class="col-xs-12 col-md-5">
       <table class="table table-bordered table-responsive table-hover">
         <thead>
           <tr>
             <th scope="row">PRODUCTO</th>
             <th scope="row">PRECIO</th>
             <th>PRECIO</tH>
             <th>FORMA DE PAGO</tH>
             <th>FECHA</tH>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td>Lorem ipsum</td>
             <td>Lorem ipsum</td>
             <td>Lorem ipsum</td>
             <td>Lorem ipsum</td>
             <td>Lorem ipsum</td>
           </tr>
           <tr>
             <td>Lorem ipsum</td>
             <td>Lorem ipsum</td>
             <td>Lorem ipsum</td>
             <td>Lorem ipsum</td>
             <td>Lorem ipsum</td>
           </tr>
         </tbody>
       </table>
     </div>
   </div>
 </div> --}}
 
@endsection


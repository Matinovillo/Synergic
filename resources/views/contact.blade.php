@extends('layouts.main')

@section('contenido')

<section class="container mt-5">
    <div class="row">
        <div class="col-md-12 mb-5">
            <h2 class="title-color">Contactanos</h2>
        </div>
        <div class="col-md-8">
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
            <form method="POST" class="mb-5">
              @csrf
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNombre4" class="text-muted h5">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre4" name="nombre">
                    @error('nombre')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputApellido4" class="text-muted h5">Apellido</label>
                    <input type="text" class="form-control" id="inputApellido4" name="apellido">
                    @error('apellido')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCelular4" class="text-muted h5">Celular <small>(sin espacios)</small></label>
                      <input type="text" class="form-control" id="inputCelular4" name="celular" placeholder="Ej: 04519249313">
                      @error('celular')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputTelefono" class="text-muted h5">Telefono <small>(sin espacios)</small></label>
                      <input type="text" class="form-control" id="inputTelefono4" name="telefono" placeholder="Ej: 4928202">
                      @error('telefono')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="text-muted h5">Email</label>
                    <input type="text" class="form-control" id="inputEmail" name="email">
                    @error('email')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group col-xl-12 col-xs-12 col-md-12 col-lg-8 p-0">
                    <label for="" class="text-muted h5">Mensaje</label>
                    <textarea class="form-control" rows="6" name="mensaje" placeholder="Escribi tu mensaje y nos pondremos en contacto."></textarea>
                    @error('mensaje')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                
                <button type="submit" class="btn btn-outline-primary">Enviar</button>
              </form>
        </div>
        <div class="col-xl-4 d-flex aling-center justify-content-end">
                <div class="contact-widget">
                    <div class="cw-item">
                        <h5>Direccion</h5>
                        <ul>
                            <li>1481 Lorem ipsum dolor amet | B° Lorem ipsum</li>
                            <li>Córdoba | Argentina</li>
                        </ul>
                    </div>
                    <div class="cw-item">
                        <h5>Telefono</h5>
                        <ul>
                            <li>+54 351 921 0101</li>
                            <li>492 1111</li>
                        </ul>
                    </div>
                    <div class="cw-item">
                        <h5>E-mail</h5>
                        <ul>
                            <li>Synergic@gmail.com</li>
                        </ul>
                    </div>
                    <div class="cw-item">
                       
                    </div>
                </div>
        </div>
    </div>
    

    
</section>

@endsection
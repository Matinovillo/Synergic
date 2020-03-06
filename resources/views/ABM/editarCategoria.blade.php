@include('layouts.configTop')
@include('layouts.adminHeader')

<div class="row justify-content-center my-5">
    <div class="col-10">
      <h2 class="text-muted">Editar Categoria</h2>
      <form method="post">
        @csrf
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Nombre:</label>
            <input type="text" class="form-control" value="{{$categoria->nombre}}" name="nombre">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Descripcion:</label>
              <input type="text" class="form-control" value="{{$categoria->descripcion}}" name="descripcion">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Categoria:</label>
              <select class="form-control" name="id_categoria_padre">
                <option value="">Elegí una Categoria</option>
                @foreach ($unique as $padre)
              <option value="{{$padre->id}}">{{$padre->nombre}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label>Orden:</label>
              <input type="text" class="form-control" name="orden" value="{{$categoria->orden}}">
            </div>
          </div>
  
          <div class="col-12 text-center">
            <button type="submit" name="" class="btn btn-primary">GUARDAR</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  
  @include('layouts.configBot')
  
  
  
  
  
  
  
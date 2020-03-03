@include('layouts.configTop')
@include('ABM.admin')

<div class="row justify-content-center my-5">
    <div class="col-10">
      <h2>Crear Producto</h2>
  
      <form method="post" action="">
        @csrf
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label>Nombre:</label>
              <input type="text" class="form-control" value="" name="nombre">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Descripcion:</label>
              <input type="text" class="form-control" value="" name="descripcion">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Precio:</label>
              <input type="text" class="form-control" value="" name="precio">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label>Stock:</label>
              <input type="text" class="form-control" value="" name="stock">
            </div>
          </div>
  
          <div class="col-6">
            <div class="form-group">
              <label>Categoria:</label>
              <select class="form-control" name="id_categoria">
                <option value="">Elegí una Categoria</option>
                @foreach ($categorias as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
                
              </select>
            </div>
          </div>
  
          <div class="col-6">
            <div class="form-group">
              <label>Foto:</label>
              <input name="id_foto" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" name="editUser" class="btn btn-primary">GUARDAR</button>
          </div>
        </div>
      </form>
    </div>
  </div>

@include('layouts.configBot')
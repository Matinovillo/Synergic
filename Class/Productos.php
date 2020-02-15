<?php
require_once "Conexion2.php";

class Productos extends Conexion{
  private $id;
  private $nombre;
  private $descripcion;
  private $precio;
  private $stock;
  private $id_foto;
  private $id_categoria;
  private $existencia;

  public function __construct($id ,$nombre, $descripcion, $precio,$stock,$id_foto,$id_categoria,$existencia){
        $this->id = $id;
        $this->nombre = $nombre;
  			$this->descripcion = $descripcion;
  			$this->precio = $precio;
        $this->stock = $stock;
        $this->id_foto = $id_foto;
        $this->id_categoria = $id_categoria;
        $this->existencia=$existencia;
}



public function getId(){
return $this->id;
}
public function getNombre(){
return $this->nombre;
}
public function getDescripcion(){
return $this->descripcion;
}
public function getPrecio(){
return $this->precio;
}
public function getStock(){
return $this->stock;
}
public function getFoto(){
return $this->id_foto;
}
public function getCategoria(){
return $this->id_categoria;
}

public function setId($id){
$this->id =$id ;
}
public function setNombre($nombre){
$this->nombre =$nombre ;
}
public function setDescripcion($descripcion){
$this->descripcion =$descripcion ;
}
public function setPrecio($precio){
$this->precio =$precio ;
}
public function setStock($stock){
$this->stock =$stock ;
}
public function setFoto($foto){
$this->id_foto =$foto ;
}

public function setCategoria($categoria){
$this->id_categoria=$categoria ;
}




    public function MostrarProductos(){
    	$sql = "SELECT
        productos.id,
        productos.nombre,
        productos.descripcion,
        productos.precio,
        productos.stock,
        fotos.nombre as foto,
        categorias.nombre as categoria
        from productos
        left join fotos on id_foto = fotos.id
        inner join categorias on id_categoria = categorias.id where Productos.Existencia = 1 ORDER BY id;";

      $query = Conexion::conectar()->prepare($sql);
			$query->execute();
			$productos = $query->fetchAll(PDO::FETCH_ASSOC);
			$productosObject = [];
			foreach ($productos as $producto) {
				$finalproducto = new Productos($producto['id'],$producto['nombre'], $producto['descripcion'], $producto['precio'],$producto['stock'],$producto['foto'],$producto['categoria'],1);
				$productosObject[] = $finalproducto;
			}
			return $productosObject;
		}

    public function getProduct($id){
      $sql = "SELECT
        productos.id,
        productos.nombre,
        productos.descripcion,
        productos.precio,
        productos.stock,
        fotos.nombre as foto,
        categorias.nombre as categoria
        from productos
        left join fotos on id_foto = fotos.id
        inner join categorias on id_categoria = categorias.id where Productos.Existencia = 1 and productos.id = $id;";

      $query = Conexion::conectar()->prepare($sql);
      $query->execute();
      $producto = $query->fetch(PDO::FETCH_ASSOC);
      $finalproducto = new Productos($producto['id'],$producto['nombre'], $producto['descripcion'], $producto['precio'],$producto['stock'],$producto['foto'],$producto['categoria'],1);
      return $finalproducto;
    }





    public function editProduct($datos,$id){
      try {
        $sql =
        "UPDATE productos set
         nombre=:nombre,
         descripcion=:descripcion,
         precio=:precio,
         stock=:stock,
         id_foto=:id_foto,
         id_categoria=:id_categoria
        where id = $id";

        $query = Conexion::conectar()->prepare($sql);
        $query->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
        $query->bindParam(":descripcion",$datos['descripcion'],PDO::PARAM_STR);
        $query->bindParam(":precio",$datos['precio'],PDO::PARAM_INT);
        $query->bindParam(":stock",$datos['stock'],PDO::PARAM_INT);
        $query->bindParam(":id_foto",$datos['id_foto'],PDO::PARAM_STR);
        $query->bindParam(":id_categoria",$datos['id_categoria'],PDO::PARAM_STR);
        return $query->execute();
        $query->close();
      } catch (\Exception $e) {
          return false;
      }


    }



    public function newProduct(Productos $producto){
			try {
				$sql ="INSERT INTO productos (id,nombre, descripcion, precio, stock, id_foto, id_categoria,Existencia)
        VALUES(default,:nombre, :descripcion, :precio, :stock,:id_foto,:id_categoria,1)";
        $query = Conexion::conectar()->prepare($sql);
				$query->bindValue(':nombre', $producto->getNombre());
				$query->bindValue(':descripcion', $producto->getDescripcion());
				$query->bindValue(':precio', $producto->getPrecio());
				$query->bindValue(':stock', $producto->getStock());
				$query->bindValue(':id_foto', $producto->getFoto());
				$query->bindValue(':id_categoria', $producto->getCategoria());
				return $query->execute();
        $query->close();
			} catch (PDOException $exception) {
				return false;
			}
}



      public function buscarProducto($string){
        $sql = "SELECT
          productos.id,
          productos.nombre,
          productos.descripcion,
          productos.precio,
          productos.stock,
          fotos.nombre as foto,
          categorias.nombre as categoria
          from productos
          left join fotos on id_foto = fotos.id
          inner join categorias on id_categoria = categorias.id where Productos.Existencia = 1 and productos.nombre like '%$string%' ORDER BY id;";
        $query = Conexion::conectar()->prepare($sql);
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_ASSOC);
        $productosObject = [];
  			foreach ($productos as $producto) {
  				$finalproducto = new Productos($producto['id'],$producto['nombre'], $producto['descripcion'], $producto['precio'],$producto['stock'],$producto['foto'],$producto['categoria'],1);
  				$finalproducto->setId($producto['id']);
  				$productosObject[] = $finalproducto;
  			}
  			return $productosObject;
      }

      public function deleteProduct($id){
        $sql = "UPDATE productos SET Existencia = 0 where id = $id";
        $query = Conexion::conectar()->prepare($sql);
        return $query->execute();

      }

      public function restoreProduct($id){
        $sql = "UPDATE productos SET Existencia = 1 where id = $id";
        $query = Conexion::conectar()->prepare($sql);
        return $query->execute();
        $query->close();
      }


      public function getDeletedProducts(){
        $sql = "SELECT
          productos.id,
          productos.nombre,
          productos.descripcion,
          productos.precio,
          productos.stock,
          fotos.nombre as foto,
          categorias.nombre as categoria
          from productos
          left join fotos on id_foto = fotos.id
          inner join categorias on id_categoria = categorias.id where Productos.Existencia = 0;";

        $query = Conexion::conectar()->prepare($sql);
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_ASSOC);
        $productosObject = [];
        foreach ($productos as $producto) {
          $finalproducto = new Productos($producto['id'],$producto['nombre'], $producto['descripcion'], $producto['precio'],$producto['stock'],$producto['foto'],$producto['categoria'],1);
          $productosObject[] = $finalproducto;
        }
        return $productosObject;
  		}











}


 ?>

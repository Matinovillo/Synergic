<?php

require_once "conexion2.php";


class Categorias{

private $id;
private $nombre;
private $descripcion;
private $idCategoriaPadre;
private $orden;


public function __construct($id,$nombre,$descripcion,$idCategoriaPadre,$orden){
  $this->id = $id;
  $this->nombre = $nombre;
  $this->descripcion = $descripcion;
  $this->idCategoriaPadre = $idCategoriaPadre;
  $this->orden = $orden;
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
public function setIdCategoriaPadre($idCategoriaPadre){
  $this->idCategoriaPadre = $idCategoriaPadre;
}
public function setOrden($orden){
  $this->orden =$orden ;
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
public function getIdCategoriPadre(){
 return $this->idCategoriaPadre;
}
public function getOrden(){
 return $this->orden;
}


public function MostrarCategoria(){
  $sql = "SELECT id,nombre,descripcion,id_categoria_padre,orden,Existencia from categorias where existencia = 1 ORDER BY orden ASC";
  $query = Conexion::conectar()->prepare($sql);
  $query->execute();
  $categorias = $query->fetchAll(PDO::FETCH_ASSOC);
  $categoriasObject = [];
  foreach ($categorias as $categoria) {
    $finalcategory = new Categorias($categoria['id'],$categoria['nombre'], $categoria['descripcion'], $categoria['id_categoria_padre'],$categoria['orden'],1);
    $categoriasObject[] = $finalcategory;
  }
  return $categoriasObject;
}

public function getCategory($id){
  $sql = "SELECT id,nombre,descripcion,id_categoria_padre,orden from categorias where id = $id and existencia = 1";
  $query = Conexion::conectar()->prepare($sql);
  $query->execute();
  $categoria = $query->fetch(PDO::FETCH_ASSOC);
  $finalcategory = new Categorias($categoria['id'],$categoria['nombre'], $categoria['descripcion'], $categoria['id_categoria_padre'], $categoria['orden'],1);
  return $finalcategory;
}


public function editCategory($datos,$id){
  $sql =
  "UPDATE categorias set
   nombre=:nombre,
   descripcion=:descripcion,
   id_categoria_padre=:idCategoriaPadre,
   orden=:orden
  where id = $id";
  $query = Conexion::conectar()->prepare($sql);
  $query->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
  $query->bindParam(":descripcion",$datos['descripcion'],PDO::PARAM_STR);
  $query->bindParam(":idCategoriaPadre",$datos['idCategoriaPadre'],PDO::PARAM_INT);
  $query->bindParam(":orden",$datos['orden'],PDO::PARAM_INT);
  return $query->execute();
  $query->close();
}

public function newCategory(Categorias $producto){
  // try {
    $sql ="
      INSERT INTO categorias (id,nombre, descripcion, id_categoria_padre, orden,existencia)
      VALUES(default,:nombre, :descripcion, :idCategoriaPadre, :orden,1)
    ";
    $query = Conexion::conectar()->prepare($sql);
    $query->bindValue(':nombre', $producto->getNombre());
    $query->bindValue(':descripcion', $producto->getDescripcion());
    $query->bindValue(':idCategoriaPadre', $producto->getIdCategoriPadre());
    $query->bindValue(':orden', $producto->getOrden());
    return $query->execute();
    $query->close();

  }



  public function deleteCategoria($id){
  $sql = "UPDATE categorias SET existencia = 0 where id = $id";
  $query = Conexion::conectar()->prepare($sql);
  return $query->execute();
  $query->close();
        }



      public function getDeletedCategoria(){
        $sql = "SELECT id,nombre,descripcion,id_categoria_padre,orden,existencia from categorias where existencia = 0";
        $query = Conexion::conectar()->prepare($sql);
        $query->execute();

        $categorias = $query->fetchAll(PDO::FETCH_ASSOC);
        $categoriasObject = [];
        foreach ($categorias as $categoria) {
          $finalcategory = new Categorias($categoria['id'],$categoria['nombre'], $categoria['descripcion'], $categoria['id_categoria_padre'],$categoria['orden'],1);
          $categoriasObject[] = $finalcategory;
        }
        return $categoriasObject;
    	}

        public function restoreCategoria($id){
          $sql = "UPDATE categorias SET existencia = 1 where id = $id";
          $query = Conexion::conectar()->prepare($sql);
          return $query->execute();
          $query->close();
        }



















}
 ?>

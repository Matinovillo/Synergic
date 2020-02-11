<?php
require_once "Conexion.php";

class Crud extends Conexion{

    public function mostrarProductos(){
      $sql = "SELECT * from productos";
      $query = Conexion::conectar()->prepare($sql);
      $query->execute();
      return $query->fetchAll(PDO::FETCH_ASSOC);
      $query->close;
    }

    public function mostrarUsuarios(){
      $sql = "SELECT * from usuarios";
      $query = Conexion::conectar()->prepare($sql);
      $query->execute();
      return $query->fetchAll(PDO::FETCH_ASSOC);
      $query->close;
    }


    public function crearProducto($datos){

      $sql = "INSERT into productos VALUES (null,:nombre,:descripcion,:precio,:categoria,:foto,:stock)";
      $query = Conexion::conectar()->prepare($sql);
      $query->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
      $query->bindParam(":descripcion",$datos['descripcion'],PDO::PARAM_STR);
      $query->bindParam(":precio",$datos['precio'],PDO::PARAM_INT);
      $query->bindParam(":categoria",$datos['categoria'],PDO::PARAM_INT);
      $query->bindParam(":foto",$datos['foto'],PDO::PARAM_INT);
      $query->bindParam(":stock",$datos['stock'],PDO::PARAM_INT);

      return $query->execute();
      $query->close();
    }

    public function crearUsuario($datos){

      $sql = "INSERT into usuarios VALUES (null,:nombre,:apellido,:fechaDeNacimiento,:sexo,:telefono,:celular,:domicilio)";
      $query = Conexion::conectar()->prepare($sql);
      $query->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
      $query->bindParam(":apellido",$datos['apellido'],PDO::PARAM_STR);
      $query->bindParam(":fechaDeNacimiento",$datos['fechaDeNacimiento'],PDO::PARAM_STR);
      $query->bindParam(":sexo",$datos['sexo'],PDO::PARAM_STR);
      $query->bindParam(":telefono",$datos['telefono'],PDO::PARAM_INT);
      $query->bindParam(":celular",$datos['celular'],PDO::PARAM_INT);
      $query->bindParam(":domicilio",$datos['domicilio'],PDO::PARAM_STR);
      return $query->execute();
      $query->close();
    }
    public function editarProducto($datos,$id){
      $sql =
      "UPDATE productos set
       nombre=:nombre,
       descripcion=:descripcion,
       precio=:precio,
       categoria=:categoria,
       foto=:foto,
       stock=:stock
      where id = $id";

      $query = Conexion::conectar()->prepare($sql);
      $query->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
      $query->bindParam(":descripcion",$datos['descripcion'],PDO::PARAM_STR);
      $query->bindParam(":precio",$datos['precio'],PDO::PARAM_INT);
      $query->bindParam(":categoria",$datos['categoria'],PDO::PARAM_STR);
      $query->bindParam(":foto",$datos['foto'],PDO::PARAM_INT);
      $query->bindParam(":stock",$datos['stock'],PDO::PARAM_INT);

      return $query->execute();
      $query->close();
    }

    public function editarUsuario($datos,$id){
      $sql =
      "UPDATE usuarios set
       nombre=:nombre,
       apellido=:apellido,
       fechaDeNacimiento=:fechaDeNacimiento,
       sexo=:sexo,
       telefono=:telefono,
       celular=:celular,
       domicilio=:domicilio
      where id = $id";

      $query = Conexion::conectar()->prepare($sql);
      $query->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
      $query->bindParam(":apellido",$datos['apellido'],PDO::PARAM_STR);
      $query->bindParam(":fechaDeNacimiento",$datos['fechaDeNacimiento'],PDO::PARAM_STR);
      $query->bindParam(":sexo",$datos['sexo'],PDO::PARAM_STR);
      $query->bindParam(":telefono",$datos['telefono'],PDO::PARAM_INT);
      $query->bindParam(":celular",$datos['celular'],PDO::PARAM_INT);
      $query->bindParam(":domicilio",$datos['domicilio'],PDO::PARAM_STR);

      return $query->execute();
      $query->close();
    }

  }














 ?>

<?php
require_once "conexion2.php";


  Class Usuario extends Conexion{
      private $usuario;
      private $nombre;
      private $apellido;
      private $contrasenia;
      private $fechaAlta;
      private $fechaNacimiento;
      private $id_sexo;
      private $id_foto;
      private $id_domicilio;



  public function __construct($nombre,$apellido,$contrasenia,$fechaNacimiento){ //falta id_sexo/id_foto/$id_domicilio
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->contrasenia = $contrasenia;
    $this->fechaNacimiento = $fechaNacimiento;
  }

public function getUsuario(){
 return $this->usuario;
}
public function getNombre(){
 return $this->nombre;
}
public function getApellido(){
 return $this->apellido;
}
public function getContrasenia(){
 return $this->contrasenia;
}
public function getFechaAlta(){
 return $this->fechaAlta;
}
public function getFechaNacimiento(){
 return $this->fechaNacimiento;
}
public function getIdSexo(){
 return $this->id_sexo;
}
public function getIdFoto(){
 return $this->id_foto;
}
public function getIdDomicilio(){
 return $this->id_domicilio;
}

public function setUsuario($usuario){
 $this->usuario=$usuario;
}
public function setNombre($nombre){
 $this->nombre=$nombre;
}
public function setApellido($apellido){
 $this->apellido=$apellido;
}
public function setContrasenia($contrasenia){
 $this->contrasenia=$contrasenia;
}
public function setFechaAlta($fechaAlta){
 $this->fechaAlta=$fechaAlta;
}
public function setFechaNacimiento($fechaNacimiento){
 $this->fechaNacimiento =$fechaNacimiento;
}
public function setIdSexo($id_sexo){
 $this->id_sexo =$id_sexo ;
}
public function setIdFoto($id_foto){
 $this->id_foto =$id_foto ;
}
public function setIdDomicilio($id_domicilio){
 $this->id_domicilio =$id_domicilio ;
}



// public function getAllUsers(){
//   $sql = "SELECT * from usuarios";
//   $query = Conexion::conectar()->prepare($sql);
//   $query->execute();
//   $users = $query->fetchAll(PDO::FETCH_ASSOC);
//   $usersObject = [];
//   foreach ($users as $user) {
//     $finaluser = new Usuarios($user['usuario'], $user['nombre'], $user['apellido'],$user['contrasenia'],$user['fechaNacimiento']);
//     $usersObject[] = $finaluser;
//   }
//   return $usersObject;
// }

public function MostrarUsuarios(){
  $sql = "SELECT * from usuarios where Existencia = 1";
  $query = Conexion::conectar()->prepare($sql);
  $query->execute();
  $users = $query->fetchAll(PDO::FETCH_ASSOC);
  $usersObject = [];
  foreach ($users as $user) {
    $finalUsers = new Usuario($user['nombre'], $user['apellido'],$user['contrasenia'],$user['fechaNacimiento']);
    $finalUsers->setUsuario($user['usuario']);
    $usersObject[] = $finalUsers;
  }
  return $usersObject;
}

public function getUser($id){
  $sql = "SELECT * from usuarios where usuario = '$id'";
  $query = Conexion::conectar()->prepare($sql);
  $query->execute();
  $user = $query->fetch(PDO::FETCH_ASSOC);
  $finalUser = new Usuario($user['nombre'], $user['apellido'],$user['contrasenia'],$user['fechaNacimiento']);
  $finalUser->setUsuario($user['usuario']);
  return $finalUser;
}

public function editUser($datos,$id){
  $sql =
  "UPDATE usuarios set
   nombre=:nombre,
   apellido=:apellido,
   contrasenia=:contrasenia,
   fechaAlta=:fechaAlta,
   fechaNacimiento = :fechaNacimiento
   -- id_foto=:id_foto,
   -- id_categoria=:id_categoria
  where usuario = :usuario ";

  $query = Conexion::conectar()->prepare($sql);
  $query->bindParam(":usuario",$id,PDO::PARAM_STR);
  $query->bindParam(":nombre",$datos['nombre'],PDO::PARAM_STR);
  $query->bindParam(":apellido",$datos['apellido'],PDO::PARAM_STR);
  $query->bindParam(":contrasenia",$datos['contrasenia'],PDO::PARAM_STR);
  $query->bindParam(":fechaAlta",$datos['fechaAlta'],PDO::PARAM_STR);
  $query->bindParam(":fechaNacimiento",$datos['fechaNacimiento'],PDO::PARAM_STR);
  $query->bindParam(":usuario",$id,PDO::PARAM_STR);
  // $query->bindParam(":id_foto",$datos['id_foto'],PDO::PARAM_STR);
  // $query->bindParam(":id_categoria",$datos['id_categoria'],PDO::PARAM_STR);
  return $query->execute();
  $query->close();
}

public function buscarUser($string){
  $sql = "SELECT * FROM usuarios where nombre like '%$string%'";
  $query = Conexion::conectar()->prepare($sql);
  $query->execute();
  $users = $query->fetchAll(PDO::FETCH_ASSOC);
  $usersObject = [];
  foreach ($users as $user) {
    $finalUsers = new Usuario($user['nombre'], $user['apellido'],$user['contrasenia'],$user['fechaNacimiento']);
    $finalUsers->setUsuario($user['usuario']);
    $usersObject[] = $finalUsers;
  }
  return $usersObject;
}

public function deleteUser($id){
  $sql = "UPDATE usuarios SET Existencia = 0 where usuario = '$id'";
  $query = Conexion::conectar()->prepare($sql);
  return $query->execute();
  $query->close();
}


public function restoreUser($id){
  $sql = "UPDATE usuarios SET Existencia = 1 where usuario = '$id'";
  $query = Conexion::conectar()->prepare($sql);
  return $query->execute();
  $query->close();
}

public function getDeletedUsers(){
  $sql = "SELECT * from usuarios where Existencia = 0";
  $query = Conexion::conectar()->prepare($sql);
  $query->execute();
  $users = $query->fetchAll(PDO::FETCH_ASSOC);
  $usersObject = [];
  foreach ($users as $user) {
    $finalUsers = new Usuario($user['nombre'], $user['apellido'],$user['contrasenia'],$user['fechaNacimiento']);
    $finalUsers->setUsuario($user['usuario']);
    $usersObject[] = $finalUsers;
  }
  return $usersObject;
}


}



 ?>

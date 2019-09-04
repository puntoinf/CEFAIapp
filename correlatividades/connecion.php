<?php
class coneccion{
    //la clase de PDO conecciona  la BD
    public function getConneccion(){
      $usuario = "cefai";//el usurio
      $contraseña = "c3F412019";//la contraseña
      $hostName = "localhost";//el nombre del host
      $baseDeDatos = "cefai";//la base de getDatos
      $coneccion = new PDO("mysql:host=$hostName;dbname=$baseDeDatos;", $usuario, $contraseña);
      return $coneccion;
    }
  }
?>

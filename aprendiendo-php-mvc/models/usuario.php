<?php
require_once 'modelo-base.php';
class Usuario extends ModeloBase{
    public $nombre;
    public $apellido;
    public $email;
    public $password;

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEmail(){
        return $this->apellido;
    }
    public  function getPassword(){
        return $this->password;
    }
    public function getAll(){
        return 'imprimiendo todos los usuarios...';
    }
}
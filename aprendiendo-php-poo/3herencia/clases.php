<?php

class Persona {
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre(){
        return $this->nombre;        
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getApellidos(){
        return $this->apellidos;        
    }
    public function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }
    public function getAltura(){
        return $this->altura;        
    }
    public function setAltura($altura){
        $this->altura=$altura;
    }
    public function getEdad(){
        return $this->edad;        
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }
    public function hablar(){
        return "Hola mundO!";
    }
    public function caminar(){
        return "Estoy caminando";
    }
}

class Informatico extends Persona {
    public $lenguajes;

    public function __construct(){
        $this->lenguajes="Java";
    }

    public function programar(){
        return "Estoy programando";
    }
    public function repararOrdenador(){
        return "Ostias! Tu ordenador esta arreglado";
    }
}

class Analista extends Informatico {
    public $metodologia;
    
    public function __construct(){
        parent::__construct();
        $this->metodologia="Scrum";
    }
}


?>
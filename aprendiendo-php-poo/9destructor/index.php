<?php

session_start();

class Objeto{
    public function __construct(){
        echo "Creando el objeto<br>";
    }

    public function __destruct(){
        echo "Destruyendo el objeto<br>";
    }

    public function __toString(){
        return "Este objeto ha sido transformado a string<br>";
    }

    public function __call($name, $arguments){
        return "No existe el metodo ".$name."</br>";
    }
}

$obj = new Objeto();

$_SESSION['obj'] = $obj;

var_dump($_SESSION['obj']);

echo $obj;

echo $obj->getNombre();
<?php
abstract class Ordenador {
    public $encendido;
    public function encender(){
        $this->encendido = true;
    }
    public function apagar(){
        $this->encendido = false;
    }

    abstract public function iniciarSoftware();
}

class PCAsus extends Ordenador{
    public $software;

    public function iniciarSoftware(){
        $this->software=true;
    }
}

$ordenador = new PCAsus();
$ordenador->iniciarSoftware();
var_dump($ordenador);

?>
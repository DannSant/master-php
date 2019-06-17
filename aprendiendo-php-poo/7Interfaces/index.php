<?php

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function defragmentar();
}

class iMac implements Ordenador{
    public $modelo;

    public function setModelo($modelo){
        $this->modelo=$modelo;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function encender(){}
    public function apagar(){}
    public function reiniciar(){}
    public function defragmentar(){}
}

$maquintosh = new iMac();
$maquintosh->setModelo("Mac Book Pro 2019");
var_dump($maquintosh);

?>
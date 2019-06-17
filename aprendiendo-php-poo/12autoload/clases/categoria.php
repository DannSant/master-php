<?php

class Categoria {
    public $nombre;
    public $desc;

    public function __construct($nombre,$desc){
        $this->nombre=$nombre;
        $this->desc=$desc;
    }
}
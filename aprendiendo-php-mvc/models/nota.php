<?php
require_once 'modelo-base.php';
class Nota extends ModeloBase{
    public $nombre;
    public $contenido;
    public function getNombre(){
        return $this->nombre;
    }
    public function setnombre($nombre){
        $this->nombre= $nombre;
    }
    public function getContenido(){
        return $this->contenido;
    }
    public function setContenido($contenido){
        $this->contenido=$contenido;
    }

    public function getAll(){
        return 'Obteniendo todas las notas';
    }
    
}
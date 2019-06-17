<?php

trait Utils{
    public function mostrarNombre(){
        echo '<h1>El nombre es '.$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;
    use Utils;
}

class Persona {
    public $nombre;
    public $apellidos;
    use Utils;
}

class Videojuego {
    public $nombre;
    public $year;
    use Utils;
}

$miCoche = new Coche();
$yo = new Persona();
$cach = new Videojuego();

$miCoche->nombre = "Pin pón";
$miCoche->mostrarNombre();

$yo->nombre="Dann";
$yo->mostrarNombre();

$cach->nombre="Cach Bandicoot";
$cach->mostrarNombre();

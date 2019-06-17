<?php
class NotaController {
    public function listar(){
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setNombre("Hola");
        $nota->setContenido("Hola mundo PHP MVC");

        require_once 'views/notas/listar.php';
    }
    public function crear() {

    }
    public function borrar(){

    }
}
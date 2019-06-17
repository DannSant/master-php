<?php 
    class Coche {
        //Atributos
        public $color;
        public $marca;
        public $modelo;
        public $velocidad;
        public $caballaje;
        public $plaza;

        //Metodos
        public function getColor(){
            return $this->color;
        }
        public function setColor($color){
            $this->color = $color;
        }
    }

    $coche = new Coche();

    $coche->setColor("Rojo");
    echo $coche->getColor();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO</title>
</head>
<body>
    <h1>Programacion Orientada a objetos</h1>
    
</body>
</html>
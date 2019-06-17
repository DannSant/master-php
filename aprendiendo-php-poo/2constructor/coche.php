<?php 
    class Coche {
        //Atributos
        public $color;
        public $marca;
        public $modelo;
        public $velocidad;
        public $caballaje;
        public $plaza;

        public function __construct($color,$marca,$modelo,$velocidad,$caballaje){
            $this->color =$color;
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->velocidad=$velocidad;
            $this->caballaje=$caballaje;

        }

        //Metodos
        public function getColor(){
            return $this->color;
        }
        public function setColor($color){
            $this->color = $color;
        }

        public function mostrarInformacion(Coche $objeto_coche){
            $informacion = "<h1>Informacion del coche</h1>";
            $informacion .= "<br>Color: ".$objeto_coche->color;
            $informacion .= "<br>Modelo: ".$objeto_coche->modelo;
            $informacion .= "<br>Velocidad: ".$objeto_coche->velocidad;
            return $informacion;
        }


    }
   
?>
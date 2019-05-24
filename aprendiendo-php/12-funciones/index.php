<?php

holamundo();

$resultado = sumar(5,6);

echo "El resultado es $resultado <br>";

$resultado = sumarConOpcional(5,6);

echo "El resultado es $resultado <br>";

$resultado = sumarConOpcional(5,6,4);

echo "El resultado es $resultado <br>";

function holamundo(){
    echo "hola mundo";
}

function sumar ($num1,$num2){
    return $num1 + $num2;
}

function sumarConOpcional ($num1,$num2,$num3 = 0){
    return $num1 + $num2 + $num3;
}

?>
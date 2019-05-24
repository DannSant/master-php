<?php 
$frase = "hello world";

echo $frase;

echo "<br>";

/**
 * a pesar que la variable frase es declarada de manera global, no es posible usarla dentro de la función
 * Para poder usarla se usa la palabra clave global
 */
function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
}

holaMundo();



//Es posible ejecutar funciones usando el nombre de la funcion guardado como string: 
$nombreFuncion = "holaMundo";
$nombreFuncion();

/**
 * funciones predefinidas
 * 
 * is_string(variable) checa si variable es una cadena
 * is_float(variable) checa si variable es numerico con decimales
 * isset(variable) checha si variable existe
 * unset(v) elimina v de memoria
 * empty(texto) checa si texto es una cadena vacia(o null) o si no existe
 * strpos("hola mundo","a") - busca el caracter a en la frase "hola mundo" y regresa la posicion
 *  */
?>
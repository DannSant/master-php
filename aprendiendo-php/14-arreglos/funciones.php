<?php

$juegos_estrategia = ['Age of empires','warcraft 3','empire earth'];

//ordena en orden alfabetico
asort($juegos_estrategia);
var_dump($juegos_estrategia);

//ordena en orden alfabetico inverso
arsort($juegos_estrategia);
var_dump($juegos_estrategia);

//ordena en orden alfabetico y sirve para numeros
sort($juegos_estrategia);
var_dump($juegos_estrategia);

//agregar elementos al arreglo
$juegos_estrategia[] = "Age of Mythology";
var_dump($juegos_estrategia);

array_push($juegos_estrategia,"Rise of Nations");
var_dump($juegos_estrategia);

//quitar el ultimo elemento
array_pop($juegos_estrategia);
var_dump($juegos_estrategia);

//obtener un indice aleatorio
$i = array_rand($juegos_estrategia);
echo $juegos_estrategia[$i];

//voltear un arreglo
var_dump(array_reverse($juegos_estrategia));

//buscar dentro de un array (si no existe regresa false, si existe regresa el indice donde está)
$res = array_search("empire earth",$juegos_estrategia);
echo $res;

//contar elementos
echo count($juegos_estrategia);

?>
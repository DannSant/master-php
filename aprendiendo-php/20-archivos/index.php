<?php

//a+ permisos de lectura y escritura
$abrirArchivo = fopen("fichero.txt","a+");

while (!feof($abrirArchivo)){
    $contenido = fgets($abrirArchivo);
    echo $contenido;
    echo "<br>";
}

fwrite($abrirArchivo,"<br> Texto metido desde php");

//cerrar archivo
fclose($abrirArchivo);

//copiar
copy('fichero.txt','fichero_copiado.txt') or die("Error al copiar");

//borrar archivo
//unlink("1" or die("Error al borrar"));

//comprobar si existe
if(file_exists("fichero.txt")){
    echo "archivo existe";
}
?>
<?php

if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta',0777) or die("No se puede crear la carpeta");
}else {
    echo 'Ya existe la carpeta men, que te pasa?';
}

rmdir('mi_carpeta');

if($gestor=opendir("./archivos")){
    while(false!==($archivo=readdir($gestor))){
        echo $archivo."<br>";
    }
}


?>
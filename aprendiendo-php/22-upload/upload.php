<?php
    $archivo = $_FILES['archivo'];
    var_dump($archivo);
    
    $nombre=$archivo['name'];
    $tipo=$archivo['type'];
    if($tipo=='image/jpg' || $tipo=='image/jpeg'){
        if(!is_dir('images')){
            mkdir('images',0777);
        }

        move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
        header("Refresh: 5; URL=index.php");
        echo "<h1>Imgaen subida correctamente</h1>";
    }else {
        header("Refresh: 5; URL=index.php");
        echo "<h1>El archivo debe ser imagen jpg</h1>";
    }
?>

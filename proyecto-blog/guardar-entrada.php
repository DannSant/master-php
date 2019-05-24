<?php
if(isset($_POST)){
    require_once 'includes/conexion.php';
    $titulo = isset($_POST['titulo'])? mysqli_real_escape_string($db,$_POST['titulo']):false;
    $descripcion = isset($_POST['descripcion'])? mysqli_real_escape_string($db,$_POST['descripcion']):false;
    $categoria = isset($_POST['categoria'])? $_POST['categoria']:false;
    $usuario = $_SESSION['usuario']['id'];

    $errores= array();

    if(!empty($titulo) && !is_numeric($titulo)){
        $titulo_validado=true;
    }else {
        $titulo_validado=false;
        $errores['titulo']="El titulo no es valido";
    }

    if(!empty($descripcion) && !is_numeric($descripcion)){
        $descripcion_validado=true;
    }else {
        $descripcion_validado=false;
        $errores['descripcion']="El descripcion no es valido";
    }

    if(!empty($categoria) && is_numeric($categoria)){
        $categoria_validado=true;
    }else {
        $categoria_validado=false;
        $errores['categoria']="El categoria no es valido";
    }

    if(count($errores)==0){
        $sql = "INSERT INTO entradas(usuario_id,categoria_id,titulo,descripcion,fecha)".  
        "VALUES ('".$usuario."','".$categoria."','".$titulo."','".$descripcion."',now());";
        echo $sql;
        $guardar = mysqli_query($db,$sql);

        echo $sql;
        echo mysqli_error($db);

        
        header("Location: index.php");

    }else {
        $_SESSION['errores_entrada'] = $errores;
        header("Location: crear-entrada.php");
        die();
    }

    
}

?>
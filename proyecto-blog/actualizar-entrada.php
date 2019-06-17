<?php
if(isset($_POST)){
    require_once 'includes/conexion.php';
    $titulo = isset($_POST['titulo'])? mysqli_real_escape_string($db,$_POST['titulo']):false;
    $descripcion = isset($_POST['descripcion'])? mysqli_real_escape_string($db,$_POST['descripcion']):false;
    $categoria = isset($_POST['categoria'])? $_POST['categoria']:false;
    $usuario = $_SESSION['usuario']['id'];
    $entrada_id = isset($_POST['id'])? mysqli_real_escape_string($db,$_POST['id']):false;

    $errores= array();

    if(!empty($entrada_id) && is_numeric($entrada_id)){
        $entrada_id_validado=true;
    }else {
        $entrada_id_validado=false;
        $errores['id']="El id no es valido";
    }

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
        $sql = "UPDATE entradas ".
        "SET categoria_id=$categoria, ".
        "    titulo='$titulo', ".
        "    descripcion='$descripcion' ".  
        "WHERE id=$entrada_id";

        echo $sql;
        //die();
        $guardar = mysqli_query($db,$sql);

      
        echo mysqli_error($db);

        
        header("Location: index.php");

    }else {
        $_SESSION['errores_entrada'] = $errores;
        header("Location: editar-entrada.php?id=".$_GET['id']);
        die();
    }

    
}

?>
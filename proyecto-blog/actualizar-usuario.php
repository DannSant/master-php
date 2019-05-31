<?php
require_once 'includes/conexion.php';
session_start();
if(isset($_POST)){
    //Recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    
    //Array de Errores
    $errores=array();

    //Validar los datos antes de guardarlos
    //Validar nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
       $nombre_validado=true;
    }else {
        $nombre_validado=false;
        $errores['nombre'] = "El nombre no es valido";
    }
    //Validar apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)){
        $apellidos_validado=true;
     }else {
         $apellidos_validado=false;
         $errores['apellidos'] = "Los apellidos no son validos";
     }     

     $guardar_usuario=false;
     if (count($errores)==0){        
        //si no hay errores, insertar en la db
        $guardar_usuario=true;

        $usuario = $_SESSION['usuario'];

        $sql = "UPDATE usuarios SET nombre='$nombre', apellidos = '$apellidos' WHERE id=".$usuario['id'];
        $guardar_datos = mysqli_query($db,$sql);

        //Para mostrar errores si hay
        //var_dump(mysqli_errors($db));

        if($guardar_datos){
            $_SESSION['usuario']['nombre']=$nombre;
            $_SESSION['usuario']['apellidos']=$apellidos;
            $_SESSION['completado'] = "El registro se ha actualizado con exito";
        }else {
            $_SESSION['errores']['general'] = "Fallo al actualizar el usuario " + $guardar_datos; 
        }

         header('Location:index.php');
     }else {
        $_SESSION['errores'] = $errores;
        header('Location:index.php');
     }

}

?>
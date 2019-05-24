<?php
require_once 'includes/conexion.php';
session_start();
if(isset($_POST)){
    //Recoger los valores del formulario
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    $password =isset($_POST['password']) ? mysqli_real_escape_string($db,$_POST['password']) : false;

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
     //Validar email
     if(!empty($email) && !is_numeric($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado=true;
     }else {
         $email_validado=false;
         $errores['email'] = "El email no es valido";
     }
     //Validar password
     if(!empty($password)){
        $password_validado=true;
     }else {
         $password_validado=false;
         $errores['password'] = "El password no puede ir vacio";
     }

     $guardar_usuario=false;
     if (count($errores)==0){
         //si no hay errores, insertar en la db
         $guardar_usuario=true;


        //Cifrar contraseña
        $pwd_segura = password_hash($password,PASSWORD_BCRYPT,['cost'=>4]); 

        $sql = "INSERT INTO usuarios VALUES (null,'$nombre','$apellidos','$email','$pwd_segura',CURDATE())";
        $guardar_datos = mysqli_query($db,$sql);

        //Para mostrar errores si hay
        //var_dump(mysqli_errors($db));

        if($guardar_datos){
            $_SESSION['completado'] = "El registro se ha completado con exito";
        }else {
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario " + $guardar_datos; 
        }

         header('Location:index.php');
     }else {
        $_SESSION['errores'] = $errores;
        header('Location:index.php');
     }

}

?>
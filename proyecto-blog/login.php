<?php

//Iniciar sesion y la conexion a bd
require 'includes/conexion.php';


//Recoger los datos del formulario
if(isset($_POST)){

    if(isset($_SESSION['error_login'])){
        session_unset($_SESSION['error_login']);
    }

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email= '$email' LIMIT 1";

    $login = mysqli_query($db,$sql);

    if($login && mysqli_num_rows($login)==1){
        //Comprobar contraseña
        $usuario = mysqli_fetch_assoc($login);
       
        $verify = password_verify($password,$usuario['password']);
        if($verify){            
            //Utilizar una sesion para guardar los datos del usuario logeado
            $_SESSION['usuario']=$usuario;

            if(isset($_SESSION['error_login'])){
                $_SESSION['error_login']=null;
            }
        } else {
            //Si algo falla enviar una sesion con el fallo
            $_SESSION['error_login'] = 'Login incorrecto';
        }
    }else {
        //Error
        $_SESSION['error_login'] = 'No se ha encontrado el usuario solicitado ';
    }    

}

//Redirigir al index.php
header('Location: index.php');



?>
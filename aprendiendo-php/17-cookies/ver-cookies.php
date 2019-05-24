<?php

if(isset($_COOKIE['nombre'])){
    echo $_COOKIE['nombre'];
}else {
    echo "no existe la cookie";
}

//para borrar un cookie 

unset($_COOKIE['nombre']);
setcookie('nombre','',time()-100);

?>
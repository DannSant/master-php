<?php
/**
 * Php almacena las sesiones en el servidor Web
 * 
 */

 //iniciar sesion
 session_start();

 $variable_normal="SOy una cadena :)";
 $_SESSION['variable_persistente'] = "hola soy una sesion";

 echo $variable_normal;
 echo"<br>";
 echo  $_SESSION['variable_persistente']
?>
<?php
/**
 * Cookie es un fichero almacenado en el PC del usuario que visita la web con el fin de recordar datos 
 * o rastrear cierta información o comportamiento
 * 
 */

//basica
setcookie("nombre","valor");

//cookie dura un año
setcookie("nombre2","valor2",time()+(60*60*24*365));

?>
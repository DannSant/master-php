<?php

$conexion = mysqli_connect("localhost","root","admin","aprendiendo_php");

//comprobar si es correcta la conexion
if(mysqli_connect_errno()){
    echo "La conexion a la DB ha fallado ".mysqli_connect_errno();
}else {
    echo "Conexion realizada correctamente";
}

mysqli_query($conexion,"SET NAMES 'utf8'");

$query =mysqli_query($conexion,"SELECT * FROM notas");

$notas = mysqli_fetch_assoc($query);

var_dump($notas);

$sql = "INSERT INTO notas (titulo,descripcion,color) VALUES('Nota desde PHP', 'Esta nota ha llegado desde php','red')";
$insert = mysqli_query($conexion,$sql);
if($insert){
   echo "Datos insertados corrctamente." ;
}else {
    echo "Error".mysqli_error($conexion);
}

?>
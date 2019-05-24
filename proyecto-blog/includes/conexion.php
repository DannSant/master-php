<?php 
$server="localhost";
$username = "root";
$password="admin";
$database="aprendiendo_php";
$db = mysqli_connect($server,$username,$password,$database);

mysqli_query($db,"SET NAMES 'utf8'");

//iniciar la sesion http
if(!isset($_SESSION)){
    session_start();
}

?>
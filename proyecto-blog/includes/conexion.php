<?php 
/*
$server="localhost";
$username = "root";
$password="admin";
$database="aprendiendo_php";
*/
$server="remotemysql.com";
$username = "mUAGaKYwoI";
$password="Oxjo5GlWkx";
$database="mUAGaKYwoI";


$db = mysqli_connect($server,$username,$password,$database);

mysqli_query($db,"SET NAMES 'utf8'");

//iniciar la sesion http
if(!isset($_SESSION)){
    session_start();
}

?>
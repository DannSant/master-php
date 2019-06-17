<?php 
require_once 'coche.php';
$coche = new Coche("Armarillo","Renaulto","Clio", 100, 150);
var_dump($coche);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO</title>
</head>
<body>
    <h1>Constructores</h1>
    <?php
    echo $coche->mostrarInformacion($coche);
    ?>
</body>
</html>
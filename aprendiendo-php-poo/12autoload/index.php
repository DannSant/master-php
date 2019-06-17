<?php

require_once 'autoload.php';

$usuario = new Usuario("Dann","sant");
echo $usuario->nombre;
echo "<br>";
echo $usuario->email;
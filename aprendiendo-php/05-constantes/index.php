<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constantes - Master en PHP</title>
</head>
<body>
<h1>Master en PHP</h1>

<?php 
    define('nombre','dann');
    echo nombre;
    echo '<br>';
    //constantes predefinidas
    echo PHP_OS;
    echo '<br>';
    echo PHP_VERSION;
    echo '<br>';
    echo PHP_EXTENSION_DIR;
    echo '<br>';
    echo __LINE__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo __FUNCTION__;

    

?>
</body>
</html>

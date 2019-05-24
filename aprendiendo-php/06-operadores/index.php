<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operadores - Master en PHP</title>
</head>
<body>
<h1>Master en PHP</h1>

<?php 
    $numero1 =55;
    $numero2 =22;

    echo 'suma'.($numero1+$numero2).'<br>';
    echo 'suma'.($numero1-$numero2).'<br>';
    echo 'producto'.($numero1*$numero2).'<br>';
    echo 'division'.($numero1/$numero2).'<br>';
    echo 'modulo'.($numero1%$numero2).'<br>';

    echo 'incremento'.($numero1++).'<br>';
    echo 'incremento'.(++$numero1).'<br>';

    echo 'decremento'.($numero2--).'<br>';
    echo 'decremento'.(--$numero2).'<br>';

    //Operadores de asignacion
    echo 'asingar e incrementar'.($numero1+=5).'<br>';
    echo 'asingar e incrementar'.($numero1-=5).'<br>';
    echo 'asingar e multiplicar'.($numero1*=5).'<br>';
    echo 'asingar e dividir'.($numero1/=5).'<br>';

    //Variables super globales
    echo $_REQUEST
    

?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$peliculas = array('Batman','Spiderman','Avengers');

echo($peliculas[0]);

$juegos_estrategia = ['Age of empires','warcraft 3','empire earth'];

var_dump($juegos_estrategia);

$personas = array(
    "nombre"=> 'Victor',
    "apellido"=>'Robles',
    'web'=>'gamingepictales.com'
);

var_dump($personas);

$contactos = array(
    array('nombre'=>'dann','email'=>'dann.santlar@gmail.com'),
    array('nombre'=>'misti','email'=>'misti@gmail.com'),
    array('nombre'=>'cach','email'=>'cach@gmail.com')
);

var_dump($contactos);


echo $contactos[0]['nombre'];

foreach($contactos as $key=>$contacto){
    echo "contacto numero".$key."<br>";
    foreach($contacto as $dato){
        echo $dato;
        echo"<br>";
    }
   
}

?>

<table>
    <thead>
        <th>Titulo</th>
        <th>Ranking</th>
    </thead>
    <tbody>
    <?php 
        for ($i =0; $i < count($juegos_estrategia); $i++){
            echo "<tr>";
            echo "<td>".$juegos_estrategia[$i] ."</td>";
            echo "<td>10/10</td>";
            echo "</tr>";
        }

    ?>
    </tbody>
</table>

<table>
    <thead>
        <th>Titulo</th>
        <th>Recomendada</th>
    </thead>
    <tbody>
    <?php 
        foreach ($peliculas as $pelicula){
            echo "<tr>";
            echo "<td>".$pelicula."</td>";
            echo "<td>Yes</td>";
            echo "</tr>";
        }

    ?>
    </tbody>
</table>
    
</body>
</html>
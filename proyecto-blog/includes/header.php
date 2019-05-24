
<?php

require_once 'conexion.php';
require_once 'includes/helpers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" type="text/Css" href="./assets/css/style.css">
</head>
<body>
    <!-- HEADER-->
    <header>
        <!-- Logo-->
        <div id="logo">
            <a href="index.php">
                Epic Tales
            </a>
        </div>

         <!-- Menu-->
         <?php $categorias = getCategorias($db);?>
        <nav id=menu>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php if(!empty($categorias)):?>
                    <?php while($categoria = mysqli_fetch_assoc($categorias)): ?>
                        <li><a href="categoria.php?id=<?=$categoria['id'] ?>"><?=$categoria['nombre'] ?></a></li>
                    <?php endwhile; ?>
                <?php endif; ?>


                <li><a href="index.php">Acerca de</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
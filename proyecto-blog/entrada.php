<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<div id="container">


   
    <?php 
    
    $entry = getEntrada($db,$_GET['id']);  

    if(!isset($entry['id'])){
        header("Location: index.php");
    }

    

    ?>

    <div id="principal">
        <h1><?=$entry['titulo'] ?></h1>
        <h2><?=$entry['categoria'] ?></h2>
        <h4><?=$entry['fecha'] ?> | <?=$entry['usuario_nombre']?></h4>
        <p>
                <?=$entry['descripcion'] ?>
        </p>

        <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id']== $entry['usuario_id']):?>
            <a href="editar-entrada.php" class="boton boton-verde"> Editar Entrada</a>
            <a href="borrar-entrada.php" class="boton boton-rojo"> Borrar Entrada</a>
        <?php endif; ?>

    </div>

       
</div>


<?php
require_once 'includes/footer.php';
?>
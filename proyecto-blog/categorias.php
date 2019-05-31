<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<div id="container">

    
        <!-- Caja principal-->
        <?php 
       
        $categoria = getCategoria($db,$_GET['id']);  

        if(!isset($categoria['id'])){
            header("Location: index.php");
        }

        $entries = getEntriesByCategory($db,$_GET['id']);  

        ?>

        <div id="principal">
        <h1>Entradas de <?=$categoria['nombre'] ?></h1>
        <article class="entrada">
        <?php if(!empty($entries)):?>
            <?php while($entry = mysqli_fetch_assoc($entries)): ?>   
            <a href="entrada.php?id=<?=$entry['id'] ?>">            
                <h2><?=$entry['titulo'] ?></h2>
                <span class="fecha"><?=$entry['categoria']." - ".$entry['fecha'] ?></span>
                <p> <?=substr($entry['descripcion'],0,120 )."..."?>
                </p>
            </a>
              <?php endwhile; ?>      

        <?php else:?>
            <div class="alerta">
            No hay entradas en esta categoria
            </div>
        <?php endif; ?>
            
        </article>
        </div>

       
    </div>


<?php
require_once 'includes/footer.php';
?>
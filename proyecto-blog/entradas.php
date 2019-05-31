<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<div id="container">

    
        <!-- Caja principal-->
        <?php 
       
        $entries = getAllEntries($db);  

        ?>

        <div id="principal">
        <h1>Todas las entradas</h1>
        <article class="entrada">
       
        <?php if(!empty($categorias)):?>
            <?php while($entry = mysqli_fetch_assoc($entries)): ?> 
            <a href="entrada.php?id=<?=$entry['id'] ?>">            
                <h2><?=$entry['titulo'] ?></h2>
                <span class="fecha"><?=$entry['categoria']." - ".$entry['fecha'] ?></span>
                <p> <?=substr($entry['descripcion'],0,120 )."..."?>
                </p>
            </a> 
              <?php endwhile; ?>
        <?php endif; ?>
            
        </article>
        </div>

       
    </div>


<?php
require_once 'includes/footer.php';
?>
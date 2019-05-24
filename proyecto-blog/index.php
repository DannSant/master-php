<?php
require_once 'includes/header.php';
?>
   
    <div id="container">

    
        <!-- Sidebar-->
        <?php
        require_once 'includes/sidebar.php';
        ?>

        <!-- Caja principal-->
        <?php 
       
        $entries = getLastEntries($db);  

        ?>

        <div id="principal">
        <h1>Ultimas entradas</h1>
        <article class="entrada">
        <?php if(!empty($categorias)):?>
            <?php while($entry = mysqli_fetch_assoc($entries)): ?>              
                <h2><?=$entry['titulo'] ?></h2>
                <span class="fecha"><?=$entry['categoria']." - ".$entry['fecha'] ?></span>
                <p> <?=substr($entry['descripcion'],0,120 )."..."?>
                </p>
              <?php endwhile; ?>
        <?php endif; ?>
            
        </article>
        </div>

       
    </div>
    <!-- Footer-->
    <?php
        require_once 'includes/footer.php';
    ?>

<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<div id="container">

    
        <!-- Caja principal-->
        <?php 
        $busqueda = $_POST['busqueda'];
     
        if(!isset($busqueda)){
            header("Location: index.php");
        }

        $busqueda_result = buscarEntradas($db,$busqueda);  

        ?>

        <div id="principal">
        <h1>Buscando... '<?=$busqueda ?>'</h1>
        <article class="entrada">
       
        <?php if(!empty($busqueda_result)):?>
            <?php while($entry = mysqli_fetch_assoc($busqueda_result)): ?> 
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
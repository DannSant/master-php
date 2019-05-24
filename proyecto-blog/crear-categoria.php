<?php
require_once 'includes/redireccion.php';
require_once 'includes/header.php';

?>

<div id="container">

        
    <!-- Sidebar-->
    <?php
    require_once 'includes/sidebar.php';
    ?>

    <!-- Caja principal-->
    <div id="principal">
        <h1>Crear categorias</h1>
        <br>
        <form action="guardar-categoria.php" method="POST">
            <label for="nombre">Nombre de la categoria</label>
            <input type="text" name="nombre"/>

            <input type="submit" value="Guardar" />
        </form>
    </div>


</div>

<!-- Footer-->
<?php
require_once 'includes/footer.php';
?>

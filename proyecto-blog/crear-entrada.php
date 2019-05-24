<?php
require_once 'includes/redireccion.php';
require_once 'includes/header.php';

?>

<div id="container">

        
    <!-- Sidebar-->
    <?php
    require_once 'includes/sidebar.php';
    $categorias = getCategorias($db); 
 
    ?>

    <!-- Caja principal-->
    <div id="principal">
        <h1>Crear entradas</h1>
        <br>
        <form action="guardar-entrada.php" method="POST">           
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo"/>
            <?php 
                echo isset($_SESSION['errores_entrada'])? mostrarError($_SESSION['errores_entrada'],'titulo'):'';
            ?>

            <label for="descripcion">Descripción</label>
            <textarea type="text" name="descripcion"></textarea>
            <?php 
                echo isset($_SESSION['errores_entrada'])? mostrarError($_SESSION['errores_entrada'],'descripcion'):'';
            ?>

            <label for="categoria">Categoria</label>
            <select name="categoria">
                <?php if(!empty($categorias)):?>
                    <?php while($categoria = mysqli_fetch_assoc($categorias)): ?>
                        <option value="<?=$categoria['id'] ?>">
                            <?=$categoria['nombre'] ?>                        
                        </option>
                    <?php endwhile; ?>
                <?php endif; ?>                
            </select>
            <?php 
                echo isset($_SESSION['errores_entrada'])? mostrarError($_SESSION['errores_entrada'],'categoria'):'';
            ?>

            <input type="submit" value="Guardar" />
        </form>
        <?php 
            borrarErrores();
        ?>
    </div>


</div>

<!-- Footer-->
<?php
require_once 'includes/footer.php';
?>

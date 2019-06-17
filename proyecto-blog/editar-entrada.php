<?php
require_once 'includes/redireccion.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<div id="container">


   
    <?php 
    
    $entry = getEntrada($db,$_GET['id']);  

    if(!isset($entry['id'])){
        header("Location: index.php");
    }

    $categorias = getCategorias($db); 

    

    ?>

    <div id="principal">
        <h1>Editar entrada</h1>
        <h1>Edita la entrada <?=$entry['titulo'] ?></h1>
        <br>
        <form action="actualizar-entrada.php" method="POST">
            <input type="hidden" name="id" value="<?=$_GET['id'] ?>" />           
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" value="<?=$entry['titulo'] ?>"/>
            <?php 
                echo isset($_SESSION['errores_entrada'])? mostrarError($_SESSION['errores_entrada'],'titulo'):'';
            ?>

            <label for="descripcion">Descripción</label>
            <textarea type="text" name="descripcion">
                <?=$entry['descripcion'] ?>
            </textarea>
            <?php 
                echo isset($_SESSION['errores_entrada'])? mostrarError($_SESSION['errores_entrada'],'descripcion'):'';
            ?>

            <label for="categoria">Categoria</label>
            <select name="categoria">
                <?php if(!empty($categorias)):?>
                    <?php while($categoria = mysqli_fetch_assoc($categorias)): ?>
                        <option value="<?=$categoria['id'] ?>"
                            <?=($categoria['id']==$entry['categoria_id'])?'selected="selected"':'' ?>
                        >
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


<?php
require_once 'includes/footer.php';
?>
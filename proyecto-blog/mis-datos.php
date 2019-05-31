<?php
require_once 'includes/redireccion.php';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
?>

<div id="principal">
    <h1>Mis datos</h1>
    <form action="actualizar-usuario.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre']?>"/>
            <?php echo mostrarError($_SESSION['errores'],'nombre')?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="<?=$_SESSION['usuario']['apellidos']?>"/>
            <?php echo mostrarError($_SESSION['errores'],'apellidos')?>

            <input type="submit" value="Actualizar" name="registrar"/>
        </form>
</div>


<?php
require_once 'includes/footer.php';
?>
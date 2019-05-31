

<aside id="sidebar">

    <?php if(isset($_SESSION['usuario'])): ?>
    <div id="usuario-logged" class="block-aside">
        <h3><?='Bienvenido '.$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'] ?></h3>
        <!--botones de accion-->
        <a class="boton boton-verde" href="crear-entrada.php">Crear entradas</a>
        <a class="boton" href="crear-categoria.php">Crear categoria</a>
        <a class="boton boton-naranja" href="mis-datos.php">Mis datos</a>
        <a class="boton boton-rojo" href="logout.php">Cerrar sesion</a>
    </div>
    <?php endif; ?>
    <?php if(!isset($_SESSION['usuario'])): ?>
    <div id="login" class="block-aside">
        <h3>Identificate</h3>

        <?php if(isset($_SESSION['error_login'])): ?>
        <div id="error_login" class="alerta alerta-error">
            <?=$_SESSION['error_login']; ?>
        </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" />
            <label for="password">Password</label>
            <input type="password" name="password" />
            <input type="submit" value="Entrar" name="login"/>
        </form>
    </div>
    
    <div id="register" class="block-aside">
        <h3>Registrate</h3>

        <!-- Mostrar errores -->
        <?php if(isset($_SESSION['completado'])): ?>
            <div class="alerta alerta-exito">
                <?=$_SESSION['completado'] ?>
            </div>
        <?php endif; ?>

        <?php if(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                <?=$_SESSION['errores']['general'] ?>
            </div>
        <?php endif; ?>

        <form action="register.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
            <?php echo mostrarError($_SESSION['errores'],'nombre')?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
            <?php echo mostrarError($_SESSION['errores'],'apellidos')?>

            <label for="email">Email</label>
            <input type="email" name="email" />
            <?php echo mostrarError($_SESSION['errores'],'email')?>

            <label for="password">Password</label>
            <input type="password" name="password" />
            <?php echo mostrarError($_SESSION['errores'],'password')?>

            <input type="submit" value="Entrar" name="registrar"/>
        </form>
        <?php 
            borrarErrores();
        ?>
    </div>
    <?php endif; ?>
</aside>
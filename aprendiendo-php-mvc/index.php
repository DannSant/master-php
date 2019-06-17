<h1>Hola mundo MVC</h1>

<?php 
require_once 'controllers/usuario.php';
require_once 'controllers/nota.php';
$controlador = new UsuarioController();
//$controlador->mostrarTodos();
//$controlador->crear();

$controladorNota = new NotaController();
$controladorNota->listar();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form method="GET" action="recibir.php">

        <label for="nombre">Nombre</label>
        <input name="nombre" type="text" />
        <br>
        <label for="apellido">Apellido</label>
        <input name="apellido" type="text" />

        <input type="submit" value="enviar datos" />

    </form>
</body>
</html>
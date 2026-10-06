<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4 - LOGIN</h1>
    <?php
        if(isset($mensaje)){
            echo "<p>$mensaje</p>";
        }
    ?>
    <form action="compruebaLogin.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario">
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
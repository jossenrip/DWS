<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="numero1">Dime un número: </label>
        <input id="numero1" name="n1" type="text" />
        <label for="numero2">Dime otro número: </label>
        <input id="numero2" name="n2" type="text" />
        <button type="submit" name="boton">Enviar números</button>
    </form>
    <?php
        $x = $_POST["n1"];
        $y = $_POST["n2"];

        echo "<p>" . print_r($_GET) . "</p>";
        echo "<p>SUMA: " . $x + $y. "</p>";
        echo "<p>SUMA: " . $x - $y. "</p>";
        echo "<p>SUMA: " . $x * $y. "</p>";
        echo "<p>SUMA: " . $x / $y. "</p>";
    ?>
</body>
</html>
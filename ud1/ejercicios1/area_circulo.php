<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos.css">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        define('PI', 3.1416);
        $radio = 3.5;
        $area = PI * $radio ** 2;

        echo "<h1>Ejercicio 2</h1>";

        echo "<div class='enunciado'>
            Crea una página en la carpeta de ejercicios llamada area_circulo.php. En
        ella, crea una variable $radio y ponle el valor 3.5. Según esa variable, calcula en otra
        variable el área del círculo (PI * 𝑟𝑎𝑑𝑖𝑜2
        ), deberás definir la constante PI, y muestra por
        pantalla el texto “El área del círculo es XX.XX”, donde XX.XX será el resultado de calcular el área.</div>";

        echo "<p>El área del círculo es $area.</p>";
    ?>
</body>
</html>
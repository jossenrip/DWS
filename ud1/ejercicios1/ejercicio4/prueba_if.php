<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $nota1 = 9.5;
        $nota2 = 5;

        echo "<h1>Ejercicio 4</h1>";

        if($nota1 > $nota2){
            echo "<p>La nota 1: $nota1 es mayor que la nota 2: $nota2</p>";
        }elseif ($nota1 < $nota2){
            echo "<p>La nota 2: $nota2 es mayor que la nota 1: $nota1</p>";
        }else{
            echo "<p>Las notas son iguales.</p>";
        }
    ?>
</body>
</html>
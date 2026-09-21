<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $nota1 = 0;
        $nota2 = 5;
        $nota3 = 10;

        echo "<h1>Ejercicio 5</h1>";

        if($nota1 > $nota2){
            if ($nota1 > $nota3){
                echo "<p>La nota 1: $nota1 es la más alta.</p>";
            }elseif($nota1 == $nota3){
                echo "<p>La nota 1 y 3 son las más altas: $nota3</p>";
            }else{
                echo "<p>La nota 3: $nota3 es la más alta.</p>";
            }
        }elseif ($nota1 < $nota2){
            if ($nota2 > $nota3){
                echo "<p>La nota 2: $nota2 es la más alta.</p>";
            }elseif($nota2 == $nota3){
                echo "<p>La nota 2 y 3 son las más altas: $nota3</p>";
            }else{
                echo "<p>La nota 3: $nota3 es la más alta.</p>";
            }
        }else{
            if($nota3 == $nota2){
                echo "<p>Las 3 notas son iguales: $nota1.</p>";
            }elseif($nota3 > $nota2){
                echo "<p>La nota 3: $nota3 es la más alta.</p>";
            }else{
                echo "<p>Las notas 1 y 2 son las mayores: $nota1</p>";
            }
        }
    ?>
</body>
</html>
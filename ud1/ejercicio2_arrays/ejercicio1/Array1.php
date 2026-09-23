<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    echo "<h1>Ejercicio 1</h1>";
    $numeros = array();

    for ($i = 0; $i < 50; $i++){
        $num = rand(0, 99);
        while(in_array($num, $numeros)){
            $num = rand(0, 99);
        }
        $numeros[] = $num;
    }

    sort($numeros);

    echo "<div class=\"tabla\">";
    for ($i =  0; $i < count($numeros); $i++){
        echo "<p>$numeros[$i]</p>";
    }
    echo "</div>";


    $mayor = $numeros[0];
    $menor = $numeros[0];
    $media = 0;
    for($i = 0; $i < count($numeros); $i++){
        $mayor = $mayor > $numeros[$i] ? $mayor : $numeros[$i];
        $menor = $menor < $numeros[$i] ? $menor : $numeros[$i];
        $media += $numeros[$i];
    }
    $media = $media / count($numeros);

    echo "<p><b>El mayor:</b> $mayor</p>";
    echo "<p><b>El menor:</b> $menor</p>";
    echo "<p><b>La media:</b> $media</p>";
    ?>
</body>
</html>
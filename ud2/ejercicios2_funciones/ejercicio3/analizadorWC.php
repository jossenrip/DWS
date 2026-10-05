<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <?php
    function analizadorWC($frase){
        $palabras = str_word_count($frase, 1, 'áéíóúÁÉÍÓÚñÑüÜ');

        $totalLetras = 0;
        $lineas = "";
        foreach ($palabras as $palabra) {
            $tam = mb_strlen($palabra);
            $totalLetras += $tam;
            $lineas .= "<p>$palabra: $tam letras</p>";
        }
    
        return "<p>Letras totales: $totalLetras</p>"
             . "<p>Cantidad de palabras: " . count($palabras) . "</p>"
             . $lineas;
    }

    echo analizadorWC("Peter canalla fuera de Mestalla");
    ?>
</body>
</html>
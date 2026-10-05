<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <?php
    function analizador($frase){
        $palabras = [];
        $actual = "";
    
        for ($i = 0; $i < strlen($frase); $i++) {
            if ($frase[$i] !== " ") {
                $actual .= $frase[$i];
            } else {
                if ($actual !== "") {
                    $palabras[] = $actual;
                    $actual = "";
                }
            }
        }
        if ($actual !== "") {
            $palabras[] = $actual;
        }
    
        $totalLetras = 0;
        $lineas = "";
        foreach ($palabras as $palabra) {
            $tam = strlen($palabra);
            $totalLetras += $tam;
            $lineas .= "<p>$palabra: $tam letras</p>";
        }
    
        return "<p>Letras totales: $totalLetras</p>"
             . "<p>Cantidad de palabras: " . count($palabras) . "</p>"
             . $lineas;
    }

    echo analizador("Peter canalla fuera de Mestalla");
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <?php
        function frasesImpares(String $frase): String{
            $impares = "";

            for($i = 0; $i < strlen($frase); $i += 2){
                $impares .= "Posición " . ($i + 1) . ": " .
                    substr($frase, $i, 1) . "<br>";
            }
            return $impares;
        }

        echo "<p>" . frasesImpares("Devolver posiciones impares.") . "</p>";
    ?>
</body>
</html>
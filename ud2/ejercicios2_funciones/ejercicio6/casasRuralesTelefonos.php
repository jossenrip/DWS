<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <?php
    function esPalindromo($texto){
        $limpio = mb_strtolower(str_replace(" ", "", $texto));
        $longitud = mb_strlen($limpio);

        for ($i = 0; $i < intdiv($longitud, 2); $i++) {
            if (mb_substr($limpio, $i, 1) !== mb_substr($limpio, $longitud - 1 - $i, 1)) {
                return false;
            }
        }

        return true;
    }

    $frase = "Ligar es ser agil";
    if(esPalindromo($frase)){
        echo "<p>" . $frase . " SI es un palindromo. </p>";
    }else{
        echo "<p>" . $frase . " NO es un palindromo. </p>";
    }
    
    ?>
</body>
</html>
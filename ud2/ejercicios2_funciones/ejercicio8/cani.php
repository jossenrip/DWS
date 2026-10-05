<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Ejercicio 8</h1>
    <?php
function cani($cadena){
    $resultado = "";
    $contador = 0;
    $longitud = mb_strlen($cadena);

    for ($i = 0; $i < $longitud; $i++) {
        $caracter = mb_substr($cadena, $i, 1);

        if ($caracter === " ") {
            $resultado .= $caracter;
        } else {
            if ($contador % 2 === 0) {
                $resultado .= mb_strtoupper($caracter);
            } else {
                $resultado .= mb_strtolower($caracter);
            }
            $contador++;
        }
    }

    return $resultado;
}

    echo "<p>" . cani("Peter canalla fuera de Mestalla") . "</p>";
    ?>
</body>
</html>
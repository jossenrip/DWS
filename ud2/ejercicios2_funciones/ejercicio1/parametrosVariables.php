<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
    function elMayorDe(): int {
        $argumentos = func_get_args();
        $mayor;
        for($i = 0; $i < count($argumentos); $i++){
            if($i == 0){
                $mayor = $argumentos[$i];
            }else{
                $mayor = $mayor > $argumentos[$i] ? $mayor : $argumentos[$i];
            }
        }
        return $mayor;
    }

    echo "<p>El mayor es: " . elMayorDe(10, 20, 3, 6, 69, 89, 5, 3) . "</p>";
    ?>
</body>
</html>
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
        function digitos(int $num): int{
            return strlen((String)$num);
        }
        function digitoN(int $num, int $pos){
            return substr((String)$num, $pos - 1, 1);
        }
        function quitarPorDetras(int $num, int $cant): int{
            if($cant <= 0){
                return $num;
            }
            $resultado = substr_replace((String)$num, "", -$cant);
            $resultado = (int) $resultado;
            return $resultado;
        }
        function quitarPorDelante(int $num, int $cant): int{
            $resultado = substr_replace((String)$num, "", 0,$cant);
            $resultado = (int) $resultado;
            return $resultado;
        }

        echo "<p>" . digitos(12345) . "</p>";
        echo "<p>" . digitoN(12345, 4) . "</p>";
        echo "<p>" . quitarPorDetras(12345, 1) . "</p>";
        echo "<p>" . quitarPorDelante(12345, 1) . "</p>";
    ?>
</body>
</html>
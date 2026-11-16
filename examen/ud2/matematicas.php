<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        function digitos(int $num): int{
            return (int) strlen($num);
        }
        function digitoN(int $num, int $p) : int{
            return substr($num, ($p - 1), 1);
        }
        function quitaPorDetras(int $num, int $cant) : int{
            return substr_replace($num, "", (strlen($num) - 1), $cant); 
        }
        function quitaPorDelante(int $num, int $cant) : int{
            return substr_replace($num, "", 0, $cant); 
        }

        echo digitos(12345) . "<br>";
        echo digitoN(12345, 4) . "<br>";
        echo quitaPorDetras(12345, 2) . "<br>";
        echo quitaPorDelante(12345, 2);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function Mayor() : int {
            $numeros = func_get_args();
            $mayor = 0;
            for($i = 0; $i < count($numeros); $i++){
                $mayor = $mayor > $numeros[$i] ? $mayor : $numeros[$i];
            }
            return $mayor;
        }

        echo "<h1>" . mayor(3, 8) . "</h1>";
    ?>
    <!-- ?x=3&y=8 -->
</body>
</html>
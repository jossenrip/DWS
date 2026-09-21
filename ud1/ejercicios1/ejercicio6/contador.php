<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        $numeros = "";
        echo "<h1>Ejercicio 6</h1>";

        for($i = 1; $i <= 100; $i++){
            if($i < 100){
                $numeros .= "$i - ";
            }else{
                $numeros .= $i;
            }
        }

        echo "<p>$numeros</p>";

        $numeros = "";

        $i = 10;
        while($i >= 0){
            if($i > 0){
                $numeros .= "$i - ";
            }else{
                $numeros .= $i;
            }
            $i--;
        }

        echo "<p>$numeros</p>";
    ?>
</body>
</html>
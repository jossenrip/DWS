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
        echo "<h1>Ejercicio 7</h1>";
        echo "<h2>Contadores</h2>";
        echo "<p>Este contador va del 1 al 100:</p>";

        for($i = 1; $i <= 100; $i++){
            if($i < 100){
                $numeros .= "$i - ";
            }else{
                $numeros .= $i;
            }
        }

        echo "<p>$numeros</p>";

        $numeros = "";

        echo "</br><p>Este otro va del 10 al 0:</p>";
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
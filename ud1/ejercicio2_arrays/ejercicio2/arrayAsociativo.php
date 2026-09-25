<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        echo "<h1>Ejercicio 2</h1>";

        $array = array();
        for($i = 0; $i < 100; $i++){
            $n = rand(1, 2);
            if($n == 1){
                $array[] = 'M';
            }else{
                $array[] = 'F';
            }
        }
        
        $conteo = ['M' => 0, 'F' => 0];

        foreach($array as $letra){
            $conteo[$letra]++;
        }

        foreach($conteo as $clave => $cantidad){
            echo "<p>$clave => $cantidad</p>";
        }

    ?>
</body>
</html>
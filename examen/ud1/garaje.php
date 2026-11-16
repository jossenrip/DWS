<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $coches = [];

    $letras = array("A", "B", "C", "D", "E", "F", "G",
    "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", 
    "T", "U", "W", "X", "Y", "Z");
    $matriculas = [];
    $marcas = ["Ford", "Seat", "KIA"];
    $modelos = [
        "Ford" => ["Fiesta", "Focus", "Kuga"],
        "Seat" => ["Ibiza", "Panda", "Leon"],
        "KIA" => ["ev2", "ev3", "k4"]
    ];

    for($i = 0; $i < 5; $i++){
        $m = rand(1000, 9999) . $letras[rand(0, (count($letras) - 1))];
        $marca = $marcas[rand(0, (count($marcas) - 1))];
        $coches[$m] = [
                $marca, 
                $modelos[$marca][rand(0, (count($modelos[$marca]) - 1))], 
                rand(2, 8)
        ];            
    }
    ksort($coches);
    echo "<table border='1'>";
        echo "<tr>";
            echo "<td>MATRÍCULA</td>";
            echo "<td>MARCA</td>";
            echo "<td>MODELO</td>";
            echo "<td>Nº PUERTAS</td>";
        echo "</tr>";
        foreach($coches as $mat => $valor){
            echo "<tr>";
                echo "<td>" . $mat . "</td>";
                foreach($valor as $v){
                    echo "<td>" . $v . "</td>";
                }
            echo "</tr>";
        }
    echo "</table>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        echo "<h1>Ejercicio 5</h1>";
        
        define("NUMCOCHES", 5);
        $letras = array("A", "B", "C", "D", "E", "F", "G",
        "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", 
        "T", "U", "W", "X", "Y", "Z");
        $garaje = [];
        $matriculas = [];
        $marcas = ["Ford", "Seat", "KIA"];
        $modelos = [
            "Ford" => ["Fiesta", "Focus", "Kuga"],
            "Seat" => ["Ibiza", "Panda", "Leon"],
            "KIA" => ["ev2", "ev3", "k4"]
        ];

        for($i = 0; $i < NUMCOCHES; $i++){
            $lMatricula = "";
            for($j = 0; $j < 3; $j++){
                $lMatricula .= $letras[rand(0, count($letras)-1)];
            }
            $matriculas[] = rand(1000, 9999) . $lMatricula;
        }

        echo "<table>";
        echo "<tr>";
        echo "<td>";
            echo "<b>Matrícula</b>";
        echo "</td>";
        echo "<td>";
            echo "<b>Marca</b>";
        echo "</td>";
        echo "<td>";
            echo "<b>Modelo</b>";
        echo "</td>";
        echo "<td>";
            echo "<b>Nº Puertas</b>";
        echo "</td>";

        for($i = 0; $i < NUMCOCHES; $i++){
            $c = $marcas[rand(0, 2)];
            $cG = $modelos[$c][rand(0,2)];
            $garaje[$matriculas[$i]] =[
                    "Marca" => $c,
                    "Modelo" => $cG,
                    "Num Puertas" => rand(2, 5)
            ];
        }

        foreach($garaje as $m => $d){
            echo "<tr>";
            echo "<td>";
                echo $m;
            echo "</td>";
            echo "<td>";
                echo $d["Marca"];
            echo "</td>";
            echo "<td>";
                echo $d["Modelo"];
            echo "</td>";
            echo "<td>";
                echo $d["Num Puertas"];
            echo "</td>";
            echo "</tr>";
        }
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>
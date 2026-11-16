<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dominio = ["@gmail.com", "@hotmail.com", "@yahoo.com"];
        $nombres = ["Jose", "Fabiana", "Ricardo"];
        $personas = [];
        for($i = 0; $i < 5; $i++){
            $n = $nombres[rand(0, (count($nombres) - 1))];
            $p = ["nombre" => $n,
                "altura" => rand(150, 200),
                "email" => strtolower($n) . $dominio[rand(0, (count($dominio) - 1))]];
            $personas[] = $p;
        }


        echo "<table border='1'>";
            echo "<tr>";
                echo "<td>NOMBRE</td>";
                echo "<td>ALTURA</td>";
                echo "<td>EMAIL</td>";
            echo "</tr>";
            foreach($personas as $valor){
                echo "<tr>";
                    foreach($valor as $v){
                        echo "<td>" . $v . "</td>";
                    }
                echo "</tr>";
            }
        echo "</table>";
    ?>
</body>
</html>
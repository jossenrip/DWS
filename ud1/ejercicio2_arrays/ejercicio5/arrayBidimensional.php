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
    $a = [];
    $numeros = [];

    for($i = 0; $i < 6; $i++){
        for($j = 0; $j < 9; $j++){
            $n = 0;
            do{
                $n = rand(100, 999);
            }while(in_array($n, $numeros));
            $a[$i][$j] = $n;
            $numeros[] = $n;
        }
    }

    $a2 = $a;
    for($i = 0; $i < 6; $i++){
        ${"oMenor" . $i} = $a2[$i];
        ${"oMayor" . $i} = $a2[$i];
        sort(${"oMenor" . $i});
        rsort(${"oMayor" . $i});
    }


    $mayores = [];
    $menores = [];
    for($i = 0; $i < count($a); $i++){
        $mayores[] = ${"oMayor" . $i}[0];
        $menores[] = ${"oMenor" . $i}[0];
    }
    rsort($mayores);
    sort($menores);
    $mayor = $mayores[0];
    $menor = $menores[0];

    $colMax = -1;
    for($i = 0; $i < 6; $i++){
        for($j = 0; $j < 9; $j++){
            if($a[$i][$j] == $mayor){
                $colMax = $j;
            }
        }
    }
    
    echo "<table>";
    foreach($a as $fila){
        if(in_array($menor, $fila)){
            echo "<tr class='verde'>";
        }else{
            echo "<tr>";
        }
    
        foreach($fila as $j => $valor){
            if($j == $colMax){
                echo "<td class='azul'>$valor</td>";
            }else{
                echo "<td>$valor</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    
    ?>
</body>
</html>
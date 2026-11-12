<?php
    require_once "Player.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $jugadores = [];
        if(!$fp = fopen("plantillas.csv", "r")){
            echo "<p>No se puede abrir el archivo.</p>";
        }else{
            fgetcsv($fp, 0, ",");
            
            while(($linea = fgetcsv($fp, 0, ",")) !== false){
                if ($linea === [null]) {
                    continue;
                }
                #"UTF-8" Pq puede dar problemas con acentos o Ñ
                if(mb_strtolower($linea[1], "UTF-8") == mb_strtolower("Atlético de Madrid", "UTF-8")){
                    $jugadores[] = [$linea[4] . " " . $linea[5], $linea[6], $linea[9], $linea[11], $linea[10], $linea[17], $linea[12], $linea[16], $linea[18], $linea[19]];
                }
            }
            
            foreach($jugadores as $jugador){
                $p_max = 0;
                $goles = 0;    
                $p_max = $p_max > $jugador[12] ? $p_max : $jugador[12];
                $goles += $jugador[17];
            }
            for(; $p_max == 0;){
                $partidos =$p_max;
                $v = rand(0, $p_max);
                $p_max -= $v;
                $d = rand(0, $p_max);
                $p_max -= $d;
                $e =
            }

            usort($jugadores, function($a, $b){
                return $a[0] <=> $b[0];
            });
            fclose($fp);
        }
    ?>    
</body>
</html>
<>
{}
<?php
    require_once "Player.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos.css">
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
                    $jugadores[] = new Futbolista(
                    $linea[4] . " " . $linea[5],
                    DateTime::createFromFormat("d/m/Y", trim($linea[6])),
                    $linea[9], 
                    (int)($linea[11]), 
                    $linea[10], 
                    (int)($linea[17]), 
                    (int)($linea[12]), 
                    (int)($linea[16]), 
                    (int)($linea[18]), 
                    (int)($linea[19]));
                    $nEquipo = $linea[1];
                }
            }
            
            $p_max = 0;
            $goles = 0;
            foreach($jugadores as $jugador){    
                $p_max = $p_max > $jugador->getPartidos() ? $p_max : $jugador->getPartidos();
                $goles += $jugador->getGoles();
            }
            $partidos =$p_max;
            $v = rand(0, $p_max);
            $p_max -= $v;
            $d = rand(0, $p_max);
            $p_max -= $d;
            $e = $p_max;

            $equipo = new Equipo($nEquipo, $jugadores[0], $partidos, $v, $d, $e, $goles, rand(0, ($goles + 50)));
            for($i = 1; $i < count($jugadores); $i++){
                $equipo->singlePlayer($jugadores[$i]);
            }

            echo $jugadores[array_rand($jugadores)]->render();
            echo "<br>";
            $equipo->render();
            fclose($fp);
        }
    ?>    
</body>
</html>
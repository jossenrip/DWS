<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function plantilla($fichero, string $equipo){
            $jugadores = [];
            $dorsales = [];
            $nombres = [];
            $a = fopen($fichero, "r");
            if($a == false){
                throw new Exception("No se puede abrir el fichero ");
            }else{
                fgetcsv($a, null, ',', '"', "\\");
                while(($linea = fgetcsv($a, null, ',', '"', "\\")) !== false){
                    if(strtolower($linea[1]) === strtolower($equipo)){
                        $jugadores[] = [$linea[4] . " " . $linea[5], $linea[11]];
                    }
                }
                usort($jugadores, function($a, $b){
                    return $a[1] <=> $b[1]; #de menor a mayor dorsal, si fuera de mayor a menor, primero $b y lgo $a
                });

                echo "<table>";
                    foreach($jugadores as $jugador){
                        echo "<tr>";
                            for($i = 0; $i < count($jugador); $i++){
                                echo "<td>" . $jugador[$i] . "</td>";
                            }
                        echo "</tr>";
                    }
                echo "</table>";
            }
            fclose($a);
        }
        plantilla("plantillas.csv", "atlético de madrid");
    ?>  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Ejercicio 11</h1>
    <?php
    function plantillas(){
        $plantilla = [];
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
                    $plantilla[] = [$linea[11], $linea[4], $linea[5], $linea[3]];
                }
            }
            usort($plantilla, function($a, $b){
                return $a[0] <=> $b[0];
            });
            fclose($fp);
        }
        
        echo "<table>";
            echo "<tr>";
                echo "<td><b>DORSAL</b></td>";    
                echo "<td><b>NOMBRE</b></td>";
                echo "<td><b>APELLIDO</b></td>";
                echo "<td><b>APODO</b></td>";
            echo "</tr>";
            
            for($i = 0; $i < count($plantilla); $i++){
                echo "<tr>";
                foreach($plantilla[$i] as $filas){
                    echo "<td>$filas</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
    } 
    plantillas();   
    ?>
</body>
</html>
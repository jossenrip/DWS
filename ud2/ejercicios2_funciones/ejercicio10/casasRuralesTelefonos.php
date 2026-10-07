<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Ejercicio 10</h1>
    <?php
    function casasRurales(){
        $casas = [];
        $descartes = 0;
        #Abrir el fichero, guardarlo en $fp y comprobar q existe
        if(!$fp = fopen("casas_rurales.csv", "r")){
            echo "<p>No se puede abrir el archivo.</p>";
        }else{
            #feof comprueba que se ha llegado al final, por lo que:
            #mientras no se haya llegado al final fgets la siguiente
            #linea
            fgetcsv($fp, 0, ";");
            
            while(($linea = fgetcsv($fp, 0, ";")) !== false){
                if ($linea === [null]) {
                    continue;       // línea en blanco, no cuenta como casa
                }
                if(ctype_digit($linea[9]) && strlen($linea[9]) == 9){
                    $casas[] = [$linea[0], $linea[1], $linea[3], $linea[9]];
                }else{
                    $descartes++;
                }
            }
        }
        fclose($fp);
        echo "<p>Han sido descartadas $descartes casas.</p>";
        echo "<table>";
            echo "<tr>";
                echo "<td><b>ID</b></td>";
                echo "<td><b>LOCALIDAD</b></td>";
                echo "<td><b>NOMBRE</b></td>";
                echo "<td><b>TELÉFONO</b></td>";
            echo "</tr>";
            
            for($i = 0; $i < count($casas); $i++){
                echo "<tr>";
                foreach($casas[$i] as $filas){
                    echo "<td>$filas</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
    } 
    casasRurales();   
    ?>
</body>
</html>
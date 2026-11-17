<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function casas($fichero){
            $archivo = fopen($fichero, "r");
            if($archivo === false){
                throw new Exception("No se ha podido abrir el fichero.");
            }else{
                $casas = [];
                $descartes = 0;
                #Leemos la 1ra linea para saltar la cabecera
                fgetcsv($archivo, null, ";", '"', "\\");
                #Esta linea coge el valor y despues comprueba que se pudo leer correctamente.
                #while(($fila = fgetcsv($archivo, null, ";", '"', "\\")) !== false){
                #!feof = NO SE HAYA ALCANZADO EL FINAL DEL ARCHIVO
                while(!feof($archivo)){
                    #COGER SIGUIENTE FILA DE DATOS, COMO UN ARRAY
                        #->$archivo, fichero que leemos; null, límite de longitud; ;, separador de columnas; ", donde se encierran los campos, \ , caracter de escape.
                    $fila = fgetcsv($archivo, null, ";", '"', "\\");
                    if(isset($fila[9]) && is_numeric($fila[9])){
                        $casas[] = [$fila[0], $fila[1], $fila[3], $fila[9]];
                    }else{
                        $descartes++;
                    }
                }
                echo "<p>$descartes</p>";
                echo "<table>";
                foreach($casas as $casa){
                    echo "<tr>";
                    for($i = 0; $i < count($casa); $i++){
                        echo "<td>" . $casa[$i] . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
            fclose($archivo);
        }
        casas("casas_rurales.csv");
    ?>
</body>
</html>
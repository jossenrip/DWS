<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function analizador(string $frase){
            $palabras = [];
            $cont = 0;
            $palabra = "";
            for($i = 0; $i < strlen($frase); $i++){
                if(substr($frase, $i, 1) != " "){
                    $palabra .= substr($frase, $i, 1);
                    $cont++;
                }else{
                    $palabras[] = $palabra;
                    $palabra = "";
                }
            }
            $palabras[] = $palabra;
            
            echo "<h1>TOTAL DE LETRAS: " . $cont . "</h1>";
            echo "<h1>TOTAL DE PALABRAS: " . count($palabras) . "</h1>";
            for($i = 0; $i < count($palabras); $i++){
                echo "<p>" . $palabras[$i] . "</p>";
            }
        }

        analizador("Peter canalla");
    ?>
</body>
</html>
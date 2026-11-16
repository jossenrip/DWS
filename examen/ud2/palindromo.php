<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function palindromo(string $frase) : bool{
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
            $derecho = "";
            $reves = "";
            foreach($palabras as $palabra){
                $derecho .= strtolower($palabra);
            }
            for(($i = count($palabras) - 1); $i > -1; $i--){
                for($j = (strlen($palabras[$i]) - 1); $j > -1; $j--){
                    $reves .= strtolower(substr($palabras[$i], $j, 1));
                }
            }
            echo $derecho . "<br>";
            echo $reves;

            if($reves === $derecho){
                return true;
            }
            return false;
        }

        if(palindromo("Ligar es ser agil")){
            echo "<h1>V</h1>";
        }else{
            echo "<h1>F</h1>";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function frases(string $frase) : string{
            $letras = [];
            for($i = 0; $i < strlen($frase); $i++){
                if($i % 2 == 0){
                    $letras[] = substr($frase, $i, 1);
                }
            }
            $f = "";
            for($j = 0; $j < count($letras); $j++){
                $f .= $letras[$j] . " ";
            }
            return $f;
        }

        echo frases("IpnjelsdTyeaAlmdo");
    ?>
</body>
</html>
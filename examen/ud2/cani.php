<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function cani(string $frase) : string{
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

            $frasecani = "";
            $cont = 1;
            foreach($palabras as $p){
                for($i = 0; $i < strlen($palabra); $i++){
                    if($cont % 2 != 0){
                        $frasecani .= strtolower(substr($p, $i, 1));
                    }else{
                        $frasecani .= strtoupper(substr($p, $i, 1));
                    }
                    $cont++;
                }
                $frasecani .= " ";
            }
            return $frasecani;
        }

        echo cani("Peter canalla");
    ?>
</body>
</html>
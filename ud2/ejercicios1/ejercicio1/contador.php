<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
    include_once("../../../biblioteca.php");
    function cuenta($a, $b){
        $mayor = elMayor($a, $b);
        $menor = elMenor($a, $b);
        $cadena = "";

        for(; $menor <= $mayor; $menor++){
            if($menor < $mayor){
                $cadena .= $menor . " - ";
            }else{
                $cadena .= $menor;
            }
        }
        return $cadena;
    }

    echo "<p>" . cuenta(10, 20) . "</p>";
    ?>
</body>
</html>
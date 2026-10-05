<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <?php
    function intercambia($a, $b){
        $cadena = "";
        if($b == null){
            $cadena = "La variable 2 está vacía por lo que no se intertcambia.";
        }else{
            $b = $a;
            $cadena = "La variable b toma el valor de a: " . $b;
        }
        return $cadena;
    }

    echo "<p>" . intercambia(20, 40) . "</p>";
    ?>
</body>
</html>
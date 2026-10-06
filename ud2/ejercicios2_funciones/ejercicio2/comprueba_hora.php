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
        function compruebaHora($hora): boolean{
            if(strlen($hora) != 8){
                echo "<p>El formato es incorrecto. hh:mm:ss</p>";
                return false; 
            }
            if(substr($hora, 0, 2) > 23 || substr($hora, 0, 2) < 0){
                echo "<p>La hora es incorrecta.</p>";
                return false;
            }
            if(substr($hora, 3, 2) > 59 || substr($hora, 3, 2) < 0){
                echo "<p>Los minutos son incorrectos.</p>";
                return false;
            }
            if(substr($hora, 6, 2) > 59 || substr($hora, 6, 2) < 0){
                echo "<p>Los segundos son incorrectos.</p>";
                return false;
            }else{
                echo "<p>Tu hora: $hora, es válida.</p>";
                return true;
            }
        }

        compruebaHora("17:15:");
    ?>
</body>
</html>
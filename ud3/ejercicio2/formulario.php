<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos.css">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
        if(isset($_POST["boton"])){
            echo "<table>";
            foreach($_POST as $titulo => $valor){
                if ($titulo != "boton") {
                    echo "<tr>";
                    echo "<td><b>" . $titulo . "</b></td>";
                    
                    echo "<td>";
                    
                    if (is_array($valor)) {
                        echo implode(", ", $valor);
                    } else {
                        echo $valor;
                    }
                    
                    echo "</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
        }
    ?>
</body>
</html>
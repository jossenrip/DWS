<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="../../../estilos.css">
</head>
<body>
    <?php
        echo "<h1>Ejercicio 3</h1>";
        $personas = [];

        for ($i = 0; $i < 5; $i++){
            $nombre = "Jose";
            $personas[] = [
                "nombre" => "Jose",
                "edad" => rand(0, 99),
                "altura" => rand(150, 200),
                "correo" => strtolower($nombre). "@gmail.com",
                "telefono" => rand(100000000, 999999999)
            ];
        }

        echo "<table>";
            echo "<tr>";
                echo "<td><b>Nombre</b></td>";
                echo "<td><b>Edad</b></td>";
                echo "<td><b>Altura</b></td>";
                echo "<td><b>Correo</b></td>";
                echo "<td><b>Telefono</b></td>";
            echo "</tr>";
            foreach($personas as $persona){
                echo "<tr>";
                    echo "<td>" . $persona["nombre"] . "</td>";
                    echo "<td>" . $persona["edad"] . "</td>";
                    echo "<td>" . $persona["altura"] . "cm</td>";
                    echo "<td>" . $persona["correo"] . "</td>";
                    echo "<td>" . $persona["telefono"] . "</td>";
                echo "</tr>";    
            }
        echo "</table>";
    ?>
</body>
</html>
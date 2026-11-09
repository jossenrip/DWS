<?php
    session_start();

    if(!isset($_SESSION["alumnos"])){
        $_SESSION["alumnos"] = [];
    }

    if(isset($_GET["reset"])){
        $_SESSION["alumnos"] = [];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos.css">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="calificaciones.php" method="post">
        <label for="calificacion"><b>Calificación alumnos</b></label>
        <input type="text" id="nombre" name="nombre" required placeholder="Nombre">
        <br>        
        <?php
            for($i = 0; $i < 3; $i++){
                echo "<input type='number' id='nota" . ($i + 1) . "' name='nota" . ($i + 1) . "' required min=0 max=10 placeholder='Nota " . ($i + 1) . "'>
                <br>";
            }
        ?>
        <input type="submit" name="boton" value="Añadir alumno">
    </form>
    <br>
    <?php
        if(isset($_POST["boton"]) &&     
            isset($_POST["nombre"]) &&
            isset($_POST["nota1"]) &&
            isset($_POST["nota2"]) &&
            isset($_POST["nota3"])){

            $alumno = [
                "nombre" => $_POST["nombre"],
                "nota1" => $_POST["nota1"],
                "nota2" => $_POST["nota2"],
                "nota3" => $_POST["nota3"]
            ];
            $_SESSION["alumnos"][] = $alumno;
            header("Location: calificaciones.php");
            exit;
        }

        echo "<h1>Lista de alumnos</h1><br>";
        echo "<table>";
            echo "<tr>";
                echo "<td><b>NOMBRE</b></td>";
                echo "<td><b>1ª EV</b></td>";
                echo "<td><b>2ª EV</b></td>";
                echo "<td><b>3ª EV</b></td>";
                echo "<td><b>MEDIA</b></td>";
            echo "</tr>";

            for($i = 0; $i < count($_SESSION["alumnos"]); $i++){
                for($j = 0; $j < count($_SESSION["alumnos"][$i]); $j++){
                    $nombre = $_SESSION["alumnos"][$i]["nombre"];
                    $nota1 = $_SESSION["alumnos"][$i]["nota1"];
                    $nota2 = $_SESSION["alumnos"][$i]["nota2"];
                    $nota3 = $_SESSION["alumnos"][$i]["nota3"];
                }
                $media = $nota1 + $nota2 + $nota3 / 3;  

                echo "<tr>";
                    echo "<td>" . $nombre . "<td>";
                    echo "<td>" . $nota1 . "<td>";
                    echo "<td>" . $nota2 . "<td>";
                    echo "<td>" . $nota3 . "<td>";
                    echo "<td>" . $media . "<td>";
                $nombre = $_SESSION["alumnos"][$i]["nombre"];
                $nota1 = $_SESSION["alumnos"][$i]["nota1"];
                $nota2 = $_SESSION["alumnos"][$i]["nota2"];
                $nota3 = $_SESSION["alumnos"][$i]["nota3"];
                $media = round(($nota1 + $nota2 + $nota3) / 3);

                echo "<tr>";
                    echo "<td>" . $nombre . "</td>";
                    echo "<td>" . $nota1 . "</td>";
                    echo "<td>" . $nota2 . "</td>";
                    echo "<td>" . $nota3 . "</td>";
                    echo "<td>" . $media . "</td>";
                echo "</tr>";
            }
        echo "</table>";
    ?>
    <p><a href="calificaciones.php?reset=1">Borrar tabla</a></p>
</body>
</html>

<?php
    require_once "clases.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $persona = new Persona("11111111A", "Pepelu", "pepelu@gmail.com");
        $persona->__set("email", "pepdeu@gmail.com");
        echo "<h1>Persona</h1>";
        echo $persona->mostrar();
    ?>
    <hr>
    <?php
        $estudiante = new Estudiante("22222222J", "Santi Mina", "smina@gmail.com", "1234Z");
        $estudiante->__set("dni", "33333333P");
        echo "<h1>Estudiante</h1>";
        echo $estudiante->mostrar();
    ?>
</body>
</html>
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
        echo $persona->mostrar();
    ?>
    <hr>
    <?php
        $estudiante = new Estudiante("11111111A", "Pepelu", "pepelu@gmail.com");
        $estudiante->__set("email", "pepdeu@gmail.com");
        echo $estudiante->mostrar();
    ?>
</body>
</html>
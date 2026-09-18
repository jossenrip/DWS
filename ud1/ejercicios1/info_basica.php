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
    $nombre = "Jose Sendra";
    $anyo = 2005;

    echo "<h1>Ejercicio 1</h1>";

    echo "<div class='enunciado'>
        Crea una carpeta llamada ejercicios1 en tu carpeta de documentos de XAMPP y subirlo a
        github. En esta carpeta guardarás este ejercicio y los siguientes, ya que serán muchos y
        así evitamos llenar la carpeta de documentos de demasiadas subcarpetas con ejercicios
        cortos.
        Para este ejercicio, crea un documento en esta carpeta llamado info_basica.php, similar al del ejemplo anterior, pero mostrando tu nombre y tu año de nacimiento usando variables. Es decir, crearás dos variables para almacenar estos dos datos, y los
        mostrarás en una frase que diga “Me llamo XXXX y nací en el año YYYY”.
        Prueba la página en un navegador y echa un vistazo al código fuente, intentando detectar qué contenidos HTML se han generado desde PHP.</div>";
        
    echo "<p>Me llamo $nombre y nací en el año $anyo.</p>";
?>
</body>
</html>
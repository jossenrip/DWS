<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos.css">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $estudios_es = "Actualmente estoy curasando 2do de DAW y cuento con los títulos de la ESO y el CFGS de ASIR.";
        $estudios_val = "Actualment estic cursant 2n de DAW y tinc els títols d'ESO i el CFGS d'ASIR.";

        $idiomas_es = "Hablo Castellano y Valenciano a nivel nativo, B1 en Inglés y aprendiendo Italiano."
        $idiomas_es = "Parle Castellà i Valencià amb nivell natiu, B1 a Anglés i aprenent Italià."

        $idioma = "es";

        $fraseEstudios = "estudios_" . $idioma;
        $fraseIdiomas = "idiomas_" . $idioma;

        echo "<h1>Ejercicio 4</h1>";

        echo "<div class='enunciado'>
            Crea una página en la carpeta de ejercicios llamada curriculum.php donde, utilizando
            variables variables, muestres parte de tu currículum (por ejemplo, un párrafo con tus
            estudios y otro con los idiomas que hablas), tanto en español,valencià como en otro
            idioma que elijas.</div>";

        echo "<p>$$fraseEstudios</p>";
        echo "<p>$$fraseIdiomas</p>";
    ?>
</body>
</html>
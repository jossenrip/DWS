<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
        if(isset($_COOKIE["nombreusu"], $_COOKIE["colorusu"])){
            $nombre = $_COOKIE["nombreusu"];
            $color = $_COOKIE["colorusu"];

            echo "<style>
                body{
                    background-color: " . htmlspecialchars($color) . ";
                }
            </style>
            
            <h1>
                Bienvenido, " . htmlspecialchars($nombre) . "
            </h1>
            <p><a href='preferencias.php'>Pincha aquí para volver al formulario</a></p>
            <p><a href='borrar_prefs.php'>Pincha aquí para borrar las cookies</a></p>";
        }else{
            echo "<h1>Página de inicio</h1>
            <p><a href='preferencias.php'>Pincha aquí para ir al formulario</a></p>";
        }
    ?>
</body>
</html>
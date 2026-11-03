<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos.css">
    <title>Preferencias</title>
</head>
<body>
    <form action="guarda_prefs.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="color">Color favorito:</label>
        <input type="color" id="color" name="color" value="#ffffff">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
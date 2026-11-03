<?php
$mensaje = "";

if (isset($_COOKIE["user"]) && $_COOKIE["user"] !== "") {
    $mensaje = "Hola, " . htmlspecialchars($_COOKIE["user"]);
} else {
    setcookie("user", "José Manuel Sendra", time() + 1000);
    $mensaje = "Cookie creada. Recarga la página.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../estilos.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <p><?= $mensaje ?></p>
</body>
</html>
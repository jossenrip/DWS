<?php
session_start();

$error = false;

if (isset($_POST["usuario"]) && isset($_POST["pass"])) {

    $login = $_POST["usuario"];
    $password = $_POST["pass"];

    $usuarios = file("usuarios.txt");

    foreach ($usuarios as $usuario) {

        $datos = explode(":", trim($usuario));

        if ($login == $datos[0] && $password == $datos[1]) {

            $_SESSION["loginusu"] = $login;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        if($error){
            echo "<p style='color:red'>Login o contraseña incorrectos</p>";
        }
    ?>
    <form action="login.php" method="post">
        <label for="sesion"><b>Inicio de sesión</b></label>
        <input type="text" id="usuario" name="usuario" required placeholder="Nombre de usuario">
        <br>
        <input type="password" id="pass" name="pass" required placeholder="Contraseña">
        <input type="submit" name="boton" value="Entrar">
    </form>
</body>
</html>

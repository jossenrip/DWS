<?php
    $host = "localhost";
    $nombreBD = "videojuegos";
    $usuario = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",
        $usuario, $password
    );
?>
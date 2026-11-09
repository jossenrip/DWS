<?php
session_start();

if (!isset($_SESSION["loginusu"])) {
    header("Location: login.php");
    exit;
}
?>

<nav>
    <a href="pag1.php">Página 1</a> |
    <a href="pag2.php">Página 2</a>
</nav>

<hr>
<?php
    session_start();
    $articulos = array(
        array(
            "id" => 1,
            "nombre" => "Vaciabolsillos Mono",
            "precio" => 50
        ),
        array(
            "id" => 2,
            "nombre" => "Portarrollos de Gorila",
            "precio" => 179
        ),
        array(
            "id" => 3,
            "nombre" => "Mesa auxiliar",
            "precio" => 149
        ),
        array(
            "id" => 4,
            "nombre" => "Jarrón Paloma",
            "precio" => 40
        )
    );

    if (!isset($_SESSION["carrito"])) {
        $_SESSION["carrito"] = array();
    }
    
    if (!isset($_SESSION["total"])) {
        $_SESSION["total"] = 0;
    }
    if (isset($_GET["vaciar"])) {
        $_SESSION["carrito"] = array();
        $_SESSION["total"] = 0;
    
        header("Location: carro.php");
        exit();
    }

    if (isset($_GET["id"])) {
        $id = (int) $_GET["id"];
    
        foreach ($articulos as $articulo) {
            if ($articulo["id"] === $id) {
                $_SESSION["carrito"][] = $articulo;
                $_SESSION["total"] += $articulo["precio"];
                break;
            }
        }
    
        header("Location: carro.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Lista de artículos</h1>
    
    <ul>
        <?php foreach ($articulos as $articulo) { ?>
            <li>
                <a href="carro.php?id=<?php echo $articulo["id"]; ?>">
                    <?php echo htmlspecialchars($articulo["nombre"]); ?>
                </a>

                (<?php echo $articulo["precio"]; ?> €)
            </li>
        <?php } ?>
    </ul>

    <h2>Artículos seleccionados</h2>

    <?php if (empty($_SESSION["carrito"])) { ?>
        <p>No has seleccionado ningún artículo.</p>
    <?php } else { ?>
        <ul>
            <?php foreach ($_SESSION["carrito"] as $articulo) { ?>
                <li>
                    <?php echo htmlspecialchars($articulo["nombre"]); ?>
                    (<?php echo $articulo["precio"]; ?> €)
                </li>
            <?php } ?>
        </ul>

        <p>
            <strong>
                Total: <?php echo $_SESSION["total"]; ?> €
            </strong>
        </p>

        <a href="carro.php?vaciar=1">Vaciar carrito</a>
    <?php } ?>
</body>
</html>
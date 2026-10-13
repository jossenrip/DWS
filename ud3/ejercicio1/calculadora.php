
<?php
    $x = $_GET["x"];
    $y = $_GET["y"];

    $vGet = function(){
        echo "<p>" . print_r($_GET, true) . "</p>";
    };

    $operaciones = function() use ($x, $y){
        echo "<p>SUMA: " . ($x + $y) . "</p>";
        echo "<p>RESTA: " . ($x - $y) . "</p>";
        echo "<p>MULTIPLICACIÓN: " . ($x * $y) . "</p>";
        if($y == 0){
            echo "<p>DIVISIÓN: ERROR</p>";
        }else{
            echo "<p>DIVISIÓN: " . ($x / $y) . "</p>";
        }
    };

    $param = function() {
        echo "<h2>Valor de \$_SERVER</h2>";
        echo "<p>" . print_r($_SERVER, true) . "</p>";

        echo "<h2>Ordenador que hace la petición</h2>";
        echo "<p>" . $_SERVER["REMOTE_ADDR"] . "</p>";

        echo "<h2>Variable donde están los parámetros de la petición</h2>";
        echo "<p>\$_GET (en bruto: \$_SERVER[\"QUERY_STRING\"] = " . htmlspecialchars($_SERVER["QUERY_STRING"]) . ")</p>";

        echo "<h2>Ruta del sitio web en el ordenador local</h2>";
        echo "<p>" . $_SERVER["DOCUMENT_ROOT"] . "</p>";
    };

    include "calculadora.view.php";
?>
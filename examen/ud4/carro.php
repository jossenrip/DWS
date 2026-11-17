<?php
    session_start();
    define("CANTIDAD", 5);
    $articulos = [];
    for($i = 1; $i < CANTIDAD; $i++){
        $articulos[] = [
            "id" => $i,
            "nombre" => "Articulo" . $i;
            "precio" => rand(20, 100);
        ];
    }
    usort($articulos, fuction($a, $b){
        return $b["precio"] <=> $a["precio"];
    });
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<ul>";
            foreach($articulos as $a){
                for($i = 0; $i < $a; $i++){
                    echo "<li>
                        <a href='carro.php?id=" . $a["id"] . "'>" . $a["nombre"] . "( " . $a["precio"] . "€ )</a>" #aqui al hacer click en el enlace, cojo de carro.php el id de $a["id"] 
                    . "</li>" ;
                }
            }
        echo "</ul>";

        $carrito = [];
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            foreach($articulos as $e){
                if($id === $e["id"]){
                    $carrito[] = $e;
                }
            }
        }

        if(!empty($carrito)){
            $total = 0;
            echo "<h1>CARRITO</h1>"
            echo "<ul>";
            foreach($carrito as $o){
                echo "<li>" . $o["nombre"] . $o["precio"] . "</li>"
                $total += $o["precio"];
            }
            echo "</ul>";
            echo "TOTAL: " . $total;
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table border='1'>";
        for($i = 0; $i < 6; $i++){
            echo "<tr>";
            $nums = [];
            for($c = 0; $c < 9; $c++){
                $nums[] = rand(100, 999);
            }
            sort($nums);
            for($j = 0; $j < 9; $j++){
                echo "<td>" . $nums[$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "<table>";
    ?>
</body>
</html>
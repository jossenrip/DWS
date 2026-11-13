<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nums = [];
        $mayor = 0;
        $menor= 0;
        for($i = 0; $i < 50; $i++){
            $existe = false;
            do{
                $n = rand(0, 99);
            }while((in_array($n, $nums)));
            $nums[] = $n;
            if($i == 0){
                $mayor = $n;
                $menor= $n;
            }
            $mayor = $mayor < $n ? $n : $mayor;
            $menor = $menor > $n ? $n : $menor;
        }
        sort($nums);
        $sum = 0;
        for($i = 0; $i < count($nums); $i++){
            $sum += $nums[$i];
            echo $nums[$i] . " ";
        }
        echo "<br>" . $mayor . ", " . $menor . ", " . ($sum/count($nums));
        
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [];
        
        for($i = 0; $i < 100; $i++){
            $n = rand(0, 1);
            if($n == 0){
                $array[] = "M"; 
            }else{
                $array[] = "F";
            }
        }
        $m = 0;
        $l = 0;
        foreach($array as $letra){
            if($letra == "M"){
                $m++;
            }else{
                $l++;
            }
        }
        $mostar = ["M" => $m, "F" => $l];
        foreach($mostar as $clave => $valor){
            echo "<p>" . $clave . " => " . $valor . "</p>";
        }
    ?>
</body>
</html>
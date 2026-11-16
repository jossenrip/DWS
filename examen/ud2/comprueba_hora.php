<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function compruebaHora(string $hora) : bool{
            if(strlen($hora) != 8){
                return false;
            }
            if(substr($hora, 0, 2) < 0 || substr($hora, 0, 2) > 23){
                return false;
            }
            if(substr($hora, 3, 2) < 0 || substr($hora, 3, 2) > 60){
                return false;
            }
            if(substr($hora, 6, 2) < 0 || substr($hora, 6, 2) > 60){
                return false;
            }
            return true;
        }

        if(compruebaHora("241:00:09")){
            echo "<h1>BIEN</h1>";
        }else{
            echo "<h1>MAL</h1>";
        }
    ?>
</body>
</html>
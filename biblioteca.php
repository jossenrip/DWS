<?php
#Sacar el mayor
function elMayor($a, $b): int{
    if($a >= $b){
        return $a;
    }else{
        return $b;
    }
}

#Sacar el menor
function elMenor($a, $b): int{
    if($a <= $b){
        return $a;
    }else{
        return $b;
    }
}

#Sacar el mayor de numeros infinitos
function elMayorDe(): int {
    $argumentos = func_get_args();
    $mayor;
    for($i = 0; $i < count($argumentos); $i++){
        if($i == 0){
            $mayor = $argumentos[$i];
        }else{
            $mayor = $mayor > $argumentos[$i] ? $mayor : $argumentos[$i];
        }
    }
    return $mayor;
}

#Sacar el menor de numeros infinitos
function elMenorDe(): int {
    $argumentos = func_get_args();
    $menor;
    for($i = 0; $i < count($argumentos); $i++){
        if($i == 0){
            $menor = $argumentos[$i];
        }else{
            $menor = $menor < $argumentos[$i] ? $menor : $argumentos[$i];
        }
    }
    return $menor;
}

#Comprobar que un número o frase sea palíndroma
function esPalindromo($texto){
    $limpio = mb_strtolower(str_replace(" ", "", $texto));
    $longitud = mb_strlen($limpio);

    for ($i = 0; $i < intdiv($longitud, 2); $i++) {
        if (mb_substr($limpio, $i, 1) !== mb_substr($limpio, $longitud - 1 - $i, 1)) {
            return false;
        }
    }

    return true;
}

#Comprobar que una hora sea válida -> hh:mm:ss
function compruebaHora(String $hora): boolean{
    if(strlen($hora) != 8){
        echo "<p>El formato es incorrecto. hh:mm:ss</p>";
        return false; 
    }
    if(substr($hora, 0, 2) > 23 || substr($hora, 0, 2) < 0){
        echo "<p>La hora es incorrecta.</p>";
        return false;
    }
    if(substr($hora, 3, 2) > 59 || substr($hora, 3, 2) < 0){
        echo "<p>Los minutos son incorrectos.</p>";
        return false;
    }
    if(substr($hora, 6, 2) > 59 || substr($hora, 6, 2) < 0){
        echo "<p>Los segundos son incorrectos.</p>";
        return false;
    }else{
        echo "<p>Tu hora: $hora, es válida.</p>";
        return true;
    }
}

#Obtener la cantidad de nums que hay en un numero
function digitos(int $num): int{
    return strlen((String)$num);
}

#Dado  num obtener solo el q ocupa x posicion
function digitoN(int $num, int $pos){
    return substr((String)$num, $pos - 1, 1);
}

#Quitar numeros de un numero por detrás
function quitarPorDetras(int $num, int $cant): int{
    if($cant <= 0){
        return $num;
    }
    $resultado = substr_replace((String)$num, "", -$cant);
    $resultado = (int) $resultado;
    return $resultado;
}

#Quitar numeros de un numero por delante
function quitarPorDelante(int $num, int $cant): int{
    $resultado = substr_replace((String)$num, "", 0,$cant);
    $resultado = (int) $resultado;
    return $resultado;
}

#Ordenar arrays multidimensionales, pero no asociativos por x dato
function ordenarMultidimensionales($array, $pos){
    usort($array, function($a, $b) use ($pos){
        return $a[$pos] <=> $b[$pos];
    });
    return $array;
}
?>
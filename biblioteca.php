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
?>
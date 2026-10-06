<?php
    $usuarios = [
        "jose" => "1234",
        "ana" => "abcd",
        "luis" => "qwerty"
    ];

    $usuario = $_POST["usuario"] ?? "";
    $password = $_POST["password"] ?? "";

    if(array_key_exists($usuario, $usuarios)){
        if($usuarios[$usuario] === $password){
            include "ok.php";
        }else{
            $mensaje = "La contraseña es incorrecta.";
            include "ko.php";
        }
    }else{
        $mensaje = "El usuario y la contraseña son incorrectos.";
        include "ko.php";
    }
?>
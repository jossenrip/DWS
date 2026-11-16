<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $usuarios = [
        "jose" => "123"
    ];

    if(array_key_exists($_POST["usuario"], $usuarios)){
        if($usuarios[$_POST["usuario"]] === $_POST["password"]){
            include "ok.php";
        }else{
            include "ko.php";
        }
    }else{
        include "ko.php";
    }
?>
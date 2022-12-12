<?php

    $user = ["nome" => "Lucas","idade" => 26];

    $nome = $user['nome'];

    echo "$nome <br>";

    if($user['idade'] >= 18){
        echo "Maior de idade";
    }else{
        echo "Menor de idade";
    }
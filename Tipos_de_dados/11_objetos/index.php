<?php

    class Pessoa {
        function falar (){
            echo "Olá pessoa!!";
        }
    }

    $lucas = new Pessoa();

    $Lucas -> nome = "Lucas";

    echo $lucas->nome;

    echo "<br>";

    $lucas->falar();
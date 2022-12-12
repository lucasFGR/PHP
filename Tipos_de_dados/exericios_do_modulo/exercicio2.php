<?php
    /*
        1 - Crie um arquivo PHP;
        2 - Imprima 3 floats;
        4 - Utilize a função is_float em um deles.
    */

    $float1 = 2.54;
    $float2 = 3.54;
    $float3 = 43.12;

    echo $float1;
    echo "<br>";
    echo $float2;
    echo "<br>";
    echo $float3;
    echo "<br>";
    
    if (is_float($float1)){
        echo "Um verdadeiro float";
    }

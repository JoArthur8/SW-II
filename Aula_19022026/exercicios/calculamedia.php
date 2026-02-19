<?php
    $nota1 = 10;
    $nota2 = 3;
    $nota3 = 7;

    $media = ($nota1+$nota2+$nota3)/3;

    echo "Nota 1: " . $nota1 . "<br>";
    echo "Nota 2: " . $nota2 . "<br>";
    echo "Nota 3: " . $nota3 . "<br>";
    echo "Média: " . $media . "<br>";

    if($media >= 7){
        echo "Aprovado";
    } else{
        echo "Reprovado";
    }
?>
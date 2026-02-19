<?php
    $nota = 7;
    if ($nota >= 6) {
        echo "Aprovado!";
    } else {
        echo "Reprovado!";
    }
        echo "<br>";
        for ($i = 1; $i <= 5; $i++) {
            echo "Número: " . $i . " ==>";
            if ($i%2 == 0){
                echo "Reprovado";
            } else{
                echo "Aprovado";
            }
            echo "<br>";
    }
?>
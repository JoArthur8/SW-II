<?php 
    for ($i=1;$i <6; $i++){
        echo $i;
        echo "<br>";

    }
    echo "<hr>";

    $nomes = ['fulano','ciclano','beltrano','julio','roberto','seu almeida'];

    for ($i=0;$i < count($nomes); $i++){
        echo $nomes[$i];
        echo "<br>";
    }
    echo "<hr>";
    
    foreach ($nomes as $key => $value) {
        echo $key . "==>";
        echo $value;
        echo "<br>";
        
    }
?>
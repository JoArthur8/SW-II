<?php
    $JSON = file_get_contents("usuarios.json");

    $usuariosArr = json_decode($JSON, true);

    $usuarios = $usuariosArr["usuarios"];
    $emailEscolhido = "roberto@gmail.com";
    $encontrado = null;


    foreach ($usuarios as $u ) {
        foreach ($u as $key => $value) {
            if($value == $emailEscolhido){
                $encontrado = $u;
                foreach ($encontrado as $x => $y){
                    echo $x . " : " . $y . "<br>";
                } 
                
            } 
            
        }
    }

    if ($encontrado == Null){
        echo "Email não encontrado";
    }
?>
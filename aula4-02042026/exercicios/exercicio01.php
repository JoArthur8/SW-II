<?php
    $produtos = array("items"=>array("Nome"=>"Pedra","Preço"=>10.00,"Quantidade"=>500));
    $encodado = json_encode($produtos);

    file_put_contents("produtos.json",$encodado);
?>
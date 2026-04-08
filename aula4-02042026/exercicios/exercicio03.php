<?php
    $produtosJson = file_get_contents("produtos.json");

    $produtosArr = json_decode($produtosJson, true);
    $produtosArr[] = array("Nome"=>"Maçã","Pre\u00e7o"=>10,"Quantidade"=>10);

    $jsonProduto = json_encode($produtosArr);

    file_put_contents("produtos.json", $jsonProduto);


?>
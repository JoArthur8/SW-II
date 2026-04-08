<?php
    $produtosJson = file_get_contents("produtos.json");

    $produtosArr = json_decode($produtosJson, true);

    $produtoEscolhido = "Pedra";
    $encontrado = null;


    foreach ($produtosArr as $p) {
        foreach ($p as $key => $value) {
            if($value == $produtoEscolhido){
                $encontrado = $p;
            } 
        }
    } 
    if ($encontrado != null){
        unset($produtosArr[$encontrado]);
    } else{
        echo "Erro, produto não encontrado";
    }
    

    $jsonProduto = json_encode($produtosArr);

    file_put_contents("produtos.json", $jsonProduto);


?>
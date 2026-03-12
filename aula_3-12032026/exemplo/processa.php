<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa</title>
</head>
<body>
    
<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    // echo "Nome: ". $nome . "<br>";
    // echo "Email: ". $email . "<br>";
    // echo "Idade: ". $idade . "<br>"; 
?>
    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>A idade é: <?php echo $idade; ?></p>

    <p>O seu ano de nascimento é: <?php $ano = date('Y') - $idade; echo $ano?></p>
    <?php
        if ($idade >= 18){
            echo "<p style='color: red'>Você é maior de idade</p>";
        } else{
            echo "<p style='color: blue'>Você é menor de idade </p>";
        }     
        echo "<h1>Lista de Clientes</h1>";
        echo "<ul>";
        $lista = ['a','b','c','d'];
        for ($i=1; $i <= count($lista); $i++) { 
            echo "<li> Cliente: $i</li>";
        }
        echo "</ul>";
    ?>
    
        

    <!-- <h1>Lista de Clientes</h1> -->
    <!-- <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
    </ul> -->
</body>
</html>

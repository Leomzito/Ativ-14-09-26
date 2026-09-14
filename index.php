<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = "Luiz";
    $idade = 30;
    $resposta= "";
    if (idade >= 18){
        $resposta="Você é maior de idade";
    }
    else{
        $resposta="Você é menor de idade";
    }
    ?>
    <h1>nome: <?=$nome?> </h1>
    <p>idade: <?=$idade?> </p>
    <h2><?=resposta?></h2>
    
</body>
</html>
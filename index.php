<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form>
        <input type "text" nome="$nome" placeholder="Digite seu nome">
        <input type "number" idade="$idade" placeholder="Digite sua idade">
        <input type "date" data="$data" placeholder="Digite a data de hoje">
        <input type "button">
    </form>
    <div class = "container">
        <?php
        $nome = "Luiz";
        $idade = 30;
        $resposta= "";
        if ($idade >= 18){
            $resposta="Você é maior de idade";
        }
        else{
            $resposta="Você é menor de idade";
        }
        ?>
        <h1>nome: <?=$nome?> </h1>
        <p>idade: <?=$idade?> </p>
        <h2> <?=$resposta?> </h2>
    </div>
</body>
</html>
<?php
    $nome = "";
    $idade = 0;
    $resposta= "";
    if ($_SERVER ["REQUEST_METHOD"]=="POST"){
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
         if ($idade >= 18){
            $resposta="Você é maior de idade";
        }
        else{
            $resposta="Você é menor de idade";    
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type "text" id="nome" name="nome" placeholder="Digite seu nome">
        <input type "number" id="idade" name="idade" placeholder="Digite sua idade">
        <input type "button" value="Enviar">
    </form>
    <div class = "container">
        

        <?php  if($resposta != "") { ?>
        
            <?php } ?>
        <h1>nome: <?=$nome?> </h1>
        <p>idade: <?=$idade?> </p>
        <h2> <?=$resposta?> </h2>
    </div>
</body>
</html>
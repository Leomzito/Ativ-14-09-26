<?php
    $nome = "";
    $idade = 0;
    $resposta= "";
    if ($_SERVER ["REQUEST_METHOD"]=="POST"){
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
        $nota5 = $_POST["nota5"];
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
        <input type = "text" id="nome" name="nome" placeholder="Digite o nome">
        <input type = "number" id="idade" name="idade" placeholder="Digite a idade">
        <input type = "number" id="nota1" name="nota1" placeholder="Digite a nota 1">
        <input type = "number" id="nota2" name="nota2" placeholder="Digite a nota 2">
        <input type = "number" id="nota1" name="nota1" placeholder="Digite a nota 1">
        <input type = "number" id="nota1" name="idade" placeholder="Digite a idade">
        <input type = "number" id="nota1" name="idade" placeholder="Digite a idade">
        <button type="submit">Verificar</button>
    </form>
    <div class = "container">
        

        <?php  if($resposta != "") { ?>
            <h2>O nome é: <?= $nome ?> </h2>
            <h2>A idade é: <?= $idade ?> anos </h2>
            <h2> <?= $resposta ?> </h2>

        <?php } ?>
    </div>
</body>
</html>
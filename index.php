<?php
    require "conexao.php";

    echo "<br>Meu sistema está conectado!";

    $sql = "CREATE TABLE IF NOT EXISTS teste (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        idade INT NOT NULL
    )";

    $pdo->exec($sql);

    echo "<br>Tabela criada com sucesso!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../style.css">
    <title>Página Inicial</title>
</head>
<body>
    <nav>
    <a href="projetos/idade.php">Verificador de idade</a>
    <a href="projetos/notas.php">Verificador de notas</a>
    <a href="projetos/notas_get.php">Verificador de notas - metodo get</a>
    <a href="projetos/login.php">Página de login</a>
    <a href="projetos/jogos.php">Cadastro de jogos</a>
    </nav>
</body>
</html>

//Controle de qualidade
<?php
require "conexao.php";

$pdo->exec("CREATE TABLE IF NOT EXISTS jogos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    genero VARCHAR(50),
    nota INT,
    ano_lancamento INT
)");

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $nota = $_POST["nota"];
    $ano_lancamento = $_POST["ano_lancamento"];

    $sql = "INSERT INTO jogos (nome, genero, nota, ano_lancamento)
            VALUES ('$nome', '$genero', $nota, $ano_lancamento)";
    $pdo->exec($sql);

    $mensagem = "Jogo cadastrado com sucesso!";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de jogos</title>
    <link rel="stylesheet" href="jogos.css">
</head>
<body>
    <nav>
    <a href="index.php">Página inicial</a>
    </nav>
    <h1>Cadastrar jogo</h1>

    <form method="POST">
        <label for="nome">Nome do jogo</label>
        <input type="text" id="nome" name="nome" maxlength="100" required>

        <label for="genero">Gênero</label>
        <input type="text" id="genero" name="genero" maxlength="50" required>

        <label for="nota">Nota</label>
        <input type="number" id="nota" name="nota" step="1" required>

        <label for="ano_lancamento">Ano de lançamento</label>
        <input type="number" id="ano_lancamento" name="ano_lancamento" step="1" required>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($mensagem != "") {
        echo "<p>" . $mensagem . "</p>";
    }
    ?>
</body>
</html>

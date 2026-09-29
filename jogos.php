<?php
require "conexao.php";

$pdo->exec("CREATE TABLE IF NOT EXISTS jogos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    genero VARCHAR(50),
    nota INT
)");

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $nota = $_POST["nota"];

    $sql = "INSERT INTO jogos (nome, genero, nota)
            VALUES ('$nome', '$genero', $nota)";
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
</head>
<body>
    <h1>Cadastrar jogo</h1>

    <form method="POST">
        <label for="nome">Nome do jogo</label>
        <input type="text" id="nome" name="nome" maxlength="100" required>

        <label for="genero">Gênero</label>
        <input type="text" id="genero" name="genero" maxlength="50" required>

        <label for="nota">Nota</label>
        <input type="number" id="nota" name="nota" step="1" required>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    if ($mensagem != "") {
        echo "<p>" . $mensagem . "</p>";
    }
    ?>
</body>
</html>

<?php
$usuarioCorreto = "1234";
$senhaCorreta = "1234";

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == $usuarioCorreto && $senha == $senhaCorreta) {
        $mensagem = "Login realizado com sucesso";
    } else {
        $mensagem = "Usuário ou senha incorretos";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <style>
        body {
            margin: 0;
            font-size: medium;
            background-color: #eeeeee;
            font-family: Arial, sans-serif;
        }

        .caixa-login {
            width: 300px;
            margin: 80px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            padding: 8px 16px;
            background-color: #333333;
            color: white;
            border: none;
            cursor: pointer;
        }

        #mensagem {
            margin-top: 15px;
        }

        nav {
            padding: 15px;
            background-color: #333333;
        }

        nav a {
            margin-right: 15px;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav>
    <a href="index.php">Página inicial</a>
    </nav>
    <div class="caixa-login">
        <h1>Login</h1>

        <form method="POST" action="login.php">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Entrar</button>
            <p>Usuário: 1234</p>
            <p>Senha: 1234</p>
        </form>

        <p id="mensagem"><?php echo $mensagem; ?></p>
    </div>
</body>
</html>

<!--
Diferença entre POST e GET:
POST envia os dados no corpo da requisição e não os mostra no endereço da página.
GET envia os dados no endereço da página, por isso eles podem ficar visíveis na URL.
Para testar com GET, altere method="POST" para method="GET" e troque $_POST por $_GET no código PHP.
--> 

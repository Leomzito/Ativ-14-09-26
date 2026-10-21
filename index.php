<?php
    // Carregando o arquivo de rotas e guardando o valor retonado por ele
    // na variável rotas
    $rotas = require __DIR__ . "/routes/web.php";

    // Se a rota estiver vazia, vai direcionar auomaticamente ao portfolio.
    $rota = $_GET['rota'] ?? "portfolio";

    // Definindo  a variável de verificação de método PHP requisitado.
    $metodo = $_SERVER['REQUEST_METHOD'];

    // verificando se a rota existe, se nao existir, define status 404.
    if (!isset($rotas[$metodo][$rota])) {
        http_response_code(404);
        echo "Página não encotrada!";
        exit;
    }

    [$controller, $acao] = $rotas[$metodo][$rota];

    $controller -> $acao();

?>
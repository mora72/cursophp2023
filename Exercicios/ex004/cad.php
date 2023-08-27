<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // o ?? é o null coalescing operator = se for nulo a variável pega o conteúdo à direita do ??
            $nome_var = $_GET["nome"] ?? 'desconhecido';  
            $sobrenome_var = $_GET["sobrenome"] ?? 'sobredesconhecido';
            echo("É um prazer te conhecer $nome_var $sobrenome_var");
        ?>
        <p><a href="javascript:history.go(-1)">Clique AQUI para voltar...</a></p>
    </main>
</body>
</html>
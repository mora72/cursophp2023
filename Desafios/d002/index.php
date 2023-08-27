<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Números Aleatórios</h1>
        <?php 
            $min = 10;
            $max = 20;
            $num = mt_rand($min, $max);
            echo "<p>Gerar entre $min e $max.<br>Número gerado = $num</p>"
        ?>
        <button onclick="javascrip:document.location.reload()">&#x1F504; Gerar nro></button>
    </main>
</body>
</html>
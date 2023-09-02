<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio PHP</h1>
    </header>
    <main>
        <?php
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            // var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $real = $_GET["valor"] ?? 0;
            $dolar = $real / $cotacao;
            // $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            echo "<p>A cotacao foi de $cotacao  para data $fim <br>";
            echo "<p>Seus $real reais correspondem a <strong> $dolar dólares</strong></p>";
        ?>
        <p><a href="javascript:history.go(-1)">Clique AQUI para voltar...</a></p>
    </main>
</body>
</html>
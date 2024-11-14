<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <H1>Resultado do Processamento</H1>
    </header>
    <main>
        <?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date ("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'. $inicio . '%27&@dataFinalCotacao=%27'. $fim . '%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $real = $_GET["valor"] ?? 0;

            $dolar = $real / $cotacao;


           // $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

          
          //  echo "<P>Seus" . numfmt_format_currency($padrao, $real, "BRL"). " equivalem a U$" . numfmt_format_currency($padrao, $dolar, ("USD"));
            echo "<p> Seus <strong>R$" . number_format($real, 2, ",", ".") . "</strong> equivalem a <strong>US$" . number_format($dolar, 2, ".", ",") . "</strong>";
            echo "<p><strong>Cotação </strong> informada pelo site do <strong>Banco Central do Brasil</strong> </p>";
            ?>

<button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html> 
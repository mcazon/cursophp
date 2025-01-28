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
            $cotação = 5.75;

            $real = $_GET["valor"] ?? 0;

            $dolar = $real / $cotação;


           // $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $n = $_GET["valor"] ?? "Não tem valor";
            $res = $n / 5.75;
          //  echo "<P>Seus" . numfmt_format_currency($padrao, $real, "BRL"). " equivalem a U$" . numfmt_format_currency($padrao, $dolar, ("USD"));
            echo "<p> Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ".", ",");
            echo "<p><strong>Cotação fixa de R$5,75</strong> informada diretamente no código </p>";
            ?>

<button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html> 
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
            $n = $_GET["valor"] ?? "Não tem valor";
            $res = $n / 5.75;
            echo "<P>Seus<strong> R$ $n s </strong> equivalem a <strong> U$ $res</strong></p>";
            echo "<p><strong>Cotação fixa de R$5,75</strong> informada diretamente no código </p>";
            ?>

<button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>
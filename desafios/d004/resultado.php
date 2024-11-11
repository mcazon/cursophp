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
            $n = $_GET["nome"] ?? "Sem Nome";
            $s = $_GET["sobrenome"] ?? "Desconhecido";
            echo "<P> É um prazer te conhecer! <strong> $n $s </strong>. Este é meus site </p>"
        ?>

<button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>
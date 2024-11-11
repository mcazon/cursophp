<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Números aleatórios</h1>
        <?php
           $min = 0;
           $max = 100;
           $num = mt_rand($min, $max);
           echo "Gerando um número aleatório entre $min e $max... <BR> o valor
           gerado foi <strong>$num</strong>" 
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504;Gerar outro</button>
    </main>
    
</body>
</html>
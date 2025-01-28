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
        //rand() = 1951 - Linear Congrential generator;
        //mt_rand() = 1997 - Mersenne Twister;
        //A partir do PHP 7.1 o rand() é um simples apontamento para o mt_rand();
        //random_int() = gera números aleatórios criptograficamente seguros;
            $num = rand(0, 100);
            echo "<P> O valor gerado foi <strong> $num </strong>.</p>"
        ?>

<button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
    
</body>
</html>
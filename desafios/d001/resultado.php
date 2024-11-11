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
        
    </header>
    <main>
    <H1>Resultado Final</H1>
        <?php 
            $n = $_GET["numero"] ?? 0;
        //    $ant = $n - 1;
         //   $suc = $n + 1;
            echo "<P> O número escolhido foi <strong> $n</strong>.</p>";
            echo "<p>O seu Antecessor é <strong>".($n -1) . "</strong>  </P>";
            echo "<p>O seu Sucessor é <strong>".($n + 1) . "</strong> </p>";
        ?>

        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

        
    </main>
    
</body>
</html>
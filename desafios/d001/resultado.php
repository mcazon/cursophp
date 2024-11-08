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
            $n = $_GET["numero"] ?? "Sem Nome";
            $nant = $n - 1;
            $nsu = $n + 1;
            echo "<P> O número escolhido foi <strong> $n</strong>.</p>";
            echo "<p>O antecessor é <strong>$nant</strong></P>";
            echo "<p>O Sucessor é <strong>$nsu</strong> </p>";
        ?>

        <p><a href="javascript:history.go(-1)">Página Inicial</a></p>
    </main>
    
</body>
</html>
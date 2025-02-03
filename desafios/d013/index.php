<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>

    <?php
        $saque = $_REQUEST['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar (R$): <sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíneis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">

        </form>
    </main>

    <?php 
        $resto = $saque;

        //Saque 100 Reais
        $tot100 = floor($resto / 100);
        $resto %= 100;

        //saque 50 reais
        $tot50 = floor($resto /50);
        $resto %= 50;

        //Saque 10 reais
        $tot10 = floor($resto / 10);
        $resto %= 10;

        //Saque 5 reais
        $tot5 = floor($resto /5);
        $resto %= 5;

    ?>
    <section>
        <h2>Saque de <strong> R$<?=number_format($saque, 2, ",", ".")?></strong> realizado!</h2>
        O Caixa Eletrônico vai te entregar as seguintes notas:
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="100 Reais" class="nota"> x 
            <?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="50 Reais" class="nota"> x 
            <?=$tot50?></li>
        
            <li><img src="imagens/10-reais.jpg" alt="10 Reais" class="nota" > x <?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="5 Reais" class="nota"> x <?=$tot5?></li>
        </ul>
    </section>
    
</body>
</html>
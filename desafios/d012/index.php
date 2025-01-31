<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $total = $_GET['seg'] ?? 0;
?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Qual é o total de Segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$total?>">
            <input type="submit" value="Calcular">

        </form>
    </main>

    <?php 
        $sobra = $total;
        //Total de Meses
        $mes = (int)($sobra / 2_592_000);
        $sobra = $sobra % 2_592_000;
        //Total de semanas
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        //Total de Dias
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
       // Total de horas
       $hora = (int)($sobra / 3_600);
       $sobra = $sobra % 3_600;
       //Total de minutos
       $minuto = (int)($sobra / 60);
       $sobra = $sobra % 60;
        //segundos
        $segundo = $sobra;

    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($total, 0, ",", ".")?> segundos</strong> equivalem a:</p>
        <ul>
            <li><?=$mes?> Mês(es)</li>
            <li><?=$semana?> Semanas</li>
            <li><?=$dia?> Dias</li>
            <li><?=$hora?> Horas</li>
            <li><?=$minuto?> Minutos</li>
            <li><?=$segundo?> Segundos</li>
        </ul>
    </section>
    
</body>
</html>
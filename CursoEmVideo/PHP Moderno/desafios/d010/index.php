<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculando sua idade</title>
</head>
<body>
    <?php
        $ano_atual = date("Y");
        $nasc = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $ano_atual;

    ?>
    <main>
        <h1>Calculando sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$ano_atual?>" value="<?=$nasc?>">
            <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <strong> <?=$ano_atual?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">            
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php

            $idade = $ano - $nasc;

            if ($ano < $nasc) {
                echo "Ano desejado não pode ser menor que <strong>Ano de Nascimento</strong>";
            } elseif ($ano > $nasc) {
                echo "Quem nasceu em $nasc vai ter <strong>$idade</strong> em $ano</p>";
            }
            ?>
    </section>
</body>
</html>
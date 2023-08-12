<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Informe seu salário</title>
</head>
<body>
    <?php 
        
        $salarioAtual = 1380;
        $salario = $_GET["sal"] ?? 1_380.00;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($salarioAtual, 2,",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
        
            $resultado = intdiv($salario, $salarioAtual);
            $resto = $salario % $salarioAtual;

            echo "<ul>";
            echo "<li>Quem recebe um salário de <strong>R\$" . number_format($salario, 2,",", ".") . "</strong>.</li>";
            echo "<br><li>Ganha $resultado salario(s) mínimo(s).</li>";
            echo "<br><li> Mais <strong>R\$" . number_format($resto, 2, ",", ".") . "</strong>.</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustador de preços</title>
</head>
<body>
    <?php 
        $preco = $_GET['valor'] ?? 0;
        $reajuste = $_GET['reajuste'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="produto">Preço do Produto (R$)</label>
            <input type="number" name="valor" id="valor" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">
            
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <?php 
            $resultado = ($preco * $reajuste) / 100;
            $npreco = $preco + $resultado;
        ?>
        <h2>Resultado do reajuste</h2>
        
        <p>O produto que custava R$<?=number_format($preco, 2,",",".")?> com <strong><?=$reajuste?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($npreco,2 ,",",".")?></strong> a partir de agora.</p>
        </section>
        <script>
            // Declarações automáticas
            mudaValor()

            function mudaValor() {
                p.innerText = reajuste.value;
            }
        </script>
</body>
</html>
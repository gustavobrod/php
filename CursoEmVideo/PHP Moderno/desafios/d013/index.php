<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 70px;
            margin: 5px;
        }
    </style>
    <title>Caixa eletrônico</title>
</head>
<body>
    <?php 
        $valor = $_GET["saque"] ?? 0 ;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$valor?>">
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100,00, R$50,00, R$10,00, R$5,00</p>
            
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=$valor?>,00 realizado</h2>
        <?php 
            
            $sobra = $valor;
            
            $cem = intdiv($sobra, 100);
            $sobra %= 100;

            $cinq = intdiv($sobra, 50);
            $sobra %= 50;

            $dez = intdiv($sobra, 10);
            $sobra %= 10;

            $cinco = intdiv($sobra, 5);
            $sobra %= 5;
            ?>
        <p>Vocẽ vai receber</p>
        <ul>
            <li><?=$cem?> x <img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"></li>
            <li><?=$cinq?> x <img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"></li>
            <li><?=$dez?> x <img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"></li>
            <li><?=$cinco?> x <img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"></li>
        </ul>   

    </section>
</body>
</html>
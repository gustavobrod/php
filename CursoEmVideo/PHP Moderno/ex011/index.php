<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Número aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);

            echo "Gerando números aleatórios de 0 a 100" . "</br>";
            echo "O valor gerado foi <strong>$num</strong";
        ?>
    </main>
    <button onclick="javascript:document.location.reload()">&#x1F504;Gerar Novo</button>
</body>
</html>
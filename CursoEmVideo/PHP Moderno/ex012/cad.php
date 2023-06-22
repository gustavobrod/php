<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas - v1.0</h1>
        <?php 
            // Valor de conversão fixa
            $taxa = 5.22;

            // Valor disponível para conversão
            $valor = $_GET["numero"] ?? "Sem número";
            
            // Valor convertido
            $valorConvertido = $valor / $taxa;

            // Mostrar resultado na tela
            echo "Seus R$$valor equivalen a " . "<strong>" . number_format($valorConvertido, 2, ',', '.') . "</strong>" . "</p>";
            echo "<strong>Cotação fixa de R$5,22</strong> informada diretamente no código" . "</p>";
            
        ?>
    <button onClick="history.go(-1)">Voltar</button>
    </main>

</body>
</html>
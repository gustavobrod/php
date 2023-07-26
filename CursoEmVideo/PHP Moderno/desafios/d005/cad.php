<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador número real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            
            // Valor digitado pelo usuário
            $valor = $_GET["valor"] ?? "Sem número";

            // Extrai parte inteira
            $inteiro = (int)$valor;

            // Extrai parte fracionaria
            $fracao = $valor - $inteiro;

            // Mostrar resultado na tela
            echo "Analisando o número $valor informado pelo usuário" . "</br>";
            echo "<p>" . " . A parte inteiro do número é $inteiro" . "</br>";
            echo " . A parte fracionária do número é $fracao" . "</br>";    
        ?>
    <button onClick="history.go(-1)">Voltar</button>
    </main>

</body>
</html>
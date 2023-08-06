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
            $valor = $_POST["valor"] ?? "Sem número";

            // Extrai parte inteira
            $inteiro = (int)$valor;

            // Extrai parte fracionaria
            $fracao = $valor - $inteiro;

            // Mostrar resultado na tela
            echo "Analisando o número <strong>" . number_format($valor, 3, ",", ".") . "</strong> informado pelo usuário" . "</br>";
            
            echo "<ul><li> A parte inteiro do número é <strong>" . number_format($inteiro, 0,",", ".") ."</strong></li>";

            echo "<li> A parte fracionária do número é <strong>" . number_format($fracao,3,",", ".")."</strong></li></ul>";    
        ?>
    <button onClick="history.go(-1)">Voltar</button>
    </main>

</body>
</html>
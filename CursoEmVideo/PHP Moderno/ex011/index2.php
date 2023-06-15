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
            if(isset($_POST['gerar_numero'])) {
                $num = mt_rand(0, 100);
            }

            echo "Gerando números aleatórios de 0 a 100" . "<br/>" . "O valor gerado foi <strong>$num</strong";
        ?>
    </main>
    <form method="post" action="">
        <button type="submit" name="gerar_numero">Gerar Novo</button>
    </form>
</body>
</html>
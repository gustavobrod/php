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
    <header>
        <h1>Confira....</h1>
    </header>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $numero = $_GET["numero"] ?? "Sem número";
            echo "<p>O seu número é <strong> $numero </strong>" . "<br/>";
            echo "<p>O seu número antecessor é " . $numero - 1 . "<br/>";
            echo "<p>O seu número sucesso é " . $numero + 1;
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

</body>
</html>
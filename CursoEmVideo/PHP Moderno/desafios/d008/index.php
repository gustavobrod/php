<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Informe seu Número</title>
</head>
<body>
    <?php 

        $numero = $_GET["num"] ?? 0;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>

        <?php 

            $raiz = sqrt($numero); //Raiz quadrada

            $cub = $numero ** (1/3); // Raiz cúbica

            echo "Analizando o <strong>número $numero</strong>, temos!<br/>";
            
            echo "<ul>";
            echo "<br><li> A raíz quadrada é <strong>" . number_format($raiz, 3, ",", ".") . "</strong></li></br>";
            echo "<li> a raíz cúbida é <strong>" . number_format($cub,3,",", ".") . "</strong> </li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de tempo</title>
</head>
<body>
    <?php 
        $tseg = $_GET["seg"] ?? 1;
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="1" step="1" required value="<?=$tseg?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $sobra = $tseg;
            // Semana
            $sem = intdiv($sobra, 604800);
            $sobra = $sobra % 604800; 
            
            // Dia
            $dia = intdiv($sobra, 86400);
            $sobra = $sobra % 86400; 
            
            // Hora
            $hor = intdiv($sobra, 3600);
            $sobra = $sobra % 3600; 
            
            // Minutos
            $min = intdiv($sobra, 60);
            $sobra = $sobra % 60; 
            
            // Segundos (Sobra)
            $seg = $sobra; 
        ?>
        <p>Analisando o valor que você digitou, <strong><?=number_format($tseg,0, ",",".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$sem?> semamas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hor?> horas</li>
            <li><?=$min?> minutos</li>
            <li><?=$seg?> segundos</li>
        </ul>
    </section>
</body>
</html>
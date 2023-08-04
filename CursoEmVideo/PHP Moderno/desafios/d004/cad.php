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
        <h1>Conversor de moedas - v2.0</h1>
        <?php 
            // Valor de conversão fixa
            $inicio = date("m-d-Y", strtotime("-7 days"));    
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // Valor disponível para conversão
            $valor = $_GET["numero"] ?? "Sem número";
            
            // Valor convertido
            $valorConvertido = $valor / $cotacao;

            // Mostrar resultado na tela
             //echo "Seus R\$" . number_format($valor,2, ",", ".") . "equivalen a " . "<strong>" . number_format($valorConvertido, 2, ',', '.') . "</strong>" . "</p>";
             
            // Formatação de moedas com internacionalização! 
            // Biblioteca intl (Internalizaton)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalen a " . "<strong>" . numfmt_format_currency($padrao, $valorConvertido, "USD") . "</strong>" . "</p>";

            echo "<strong>Cotação fixa de R$5,22</strong> informada diretamente no código" . "</p>";
            ?>
    <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>

</body>
</html>
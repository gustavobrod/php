<?php  

$peso = 77;
$altura = 1.77;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc." . PHP_EOL;
echo "Você esta com o IMC ";

if ($imc < 18) {
    echo "abaixo";
}   elseif ($imc < 25) {
        echo "dentro";
    }
    else {
        echo "acima";
    }

echo " do recomendado" . PHP_EOL;
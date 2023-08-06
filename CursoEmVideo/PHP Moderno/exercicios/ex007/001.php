<?php 

$res = 5 + 2 / 2;
echo "O valor do resultado é: $res" . "<br/>";

$resB = 50 / 2 + 3 ** 2;
echo "O valor do resultado é: $resB" . "<br/>";

$resC = 50 / (2 + 3) ** 2;
echo "O valor do resultado é: $resC" . "<br/>";


// ORDEM DE PRECEDÊNCIA
// ( ) = inserindo parenteses muda a ordem de PRECEDÊNCIA
// ** = potência
// * ou / ou % = multiplicação / divisão / resto da divisão
// + ou - = adição / subtração 
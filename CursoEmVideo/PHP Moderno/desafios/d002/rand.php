<?php 

$min = 0;
$max = 100;

$num = mt_rand($min, $max);

// rang() = 1951 - Linear Congrential Gererator
// mt_rand() = 1997 - Mersenne Twister
// A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
// random_int() gera números aleatórios criptograficamente seguros

echo "Gerando um nṹmero aleatório entre $min e $max ... . </br>";
echo "O número gerado foi $num";
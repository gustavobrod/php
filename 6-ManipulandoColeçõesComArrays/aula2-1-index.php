<?php

// AULA 2-1

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

foreach($saldos as $saldo){
    echo "<p>O saldo é: $saldo</p>";
}

sort($saldos);

echo "o menor saldo é: $saldos[0]";
<?php

namespace Alura;

require_once 'autoload.php';

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael",
    
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000,
];

$relacionados = array_merge($correntistas, $saldos);
echo "</pre>";

echo "<pre>";
var_dump($relacionados);
echo "</pre>";



$relacionados = array_combine($correntistas, $saldos);
$relacionados["Gustavo"] = 10000;

echo "<pre>";
var_dump($relacionados);
echo "</pre>";

echo $relacionados['Giovanni'];


if(array_key_exists("João", $relacionados)){
    echo "<p>O saldo do João é:{$relacionados["João"]}</p>";
} else {
    echo "<p>Não foi encontrado</p>";
}

$maiores = ArrayUtils::encontrarPessoasComMaiorSaldo(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";
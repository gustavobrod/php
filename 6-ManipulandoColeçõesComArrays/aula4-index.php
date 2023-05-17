<?php declare(strict_types =1);

// AULA 4

namespace Alura;

require_once 'autoload.php';

$correntistas_e_contas = [
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12",
];

echo "<pre>";

var_dump($correntistas_e_contas);

ArrayUtils::remover("Giovanni",$correntistas_e_contas);

var_dump($correntistas_e_contas);

echo "</pre>";
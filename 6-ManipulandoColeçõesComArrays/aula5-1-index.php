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

$correntistasNaoPagamentes = [
    "Luis",
    "Luisa",
    "Rafael"
];

$correntitasPagantes = array_diff($correntistas, $correntistasNaoPagamentes);
echo "<pre>";
var_dump($correntitasPagantes);
echo "</pre>";
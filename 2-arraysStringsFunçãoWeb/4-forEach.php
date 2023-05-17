<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Gustavo',
        'saldo' => 1000
    ],
    '123.456.789-30' => [
        'titular' => 'Alline',
        'saldo' => 10000
    ],
    '123.456.789-50' => [
        'titular' => 'Ana Julia',
        'saldo' => 300
    ],
];

$contasCorrentes ['123.456.789-70'] = [
    'titular' => 'José Carlos',
    'saldo' => 1000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta ['titular'] . " " . $cpf . PHP_EOL;
}


<?php

//include('7-funcoes.php');
//require('7-funcoes.php');
require_once('7-funcoes.php');

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Gustavo',
        'saldo' => 10000
    ],
    '123.456.789-30' => [
        'titular' => 'Alline',
        'saldo' => 300
    ],
    '123.456.789-50' => [
        'titular' => 'Ana Julia',
        'saldo' => 100
    ],
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-30'] = sacar($contasCorrentes['123.456.789-30'], 3);

$contasCorrentes['123.456.789-50'] = depositar($contasCorrentes['123.456.789-50'], 900);

unset($contasCorrentes['123.456.789-50']);

titurlaComLetrasMaiusculas($contasCorrentes['123.456.789-10']);


//string simples
//foreach ($contasCorrentes as $cpf => $conta) {
//    exibeMensagem ("$cpf $conta[titular] $conta[saldo]");
//}

//string complexas
foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem (
        "$cpf $titular $saldo"
);
}
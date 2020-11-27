<?php

function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar esse valor.");
    } else {
        $conta['saldo'] -=$valorASacar;
    }

    return $conta;
}

function depositar (array $conta, $valorADepositar) : array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else{
        exibeMensagem ("Depositos precisam sera positivos.");
    }
    return $conta;
}

function exibeMensagem (string $mensagem)
{
    echo $mensagem . '<br>';
}

//function titurlaComLetrasMaiusculas(array &$conta)
//& informa indica a propria conta
function titurlaComLetrasMaiusculas(array &$conta)
{
    $conta ['titular'] = mb_strtoupper($conta['titular']);
}
<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{Endereco, CPF};


$conta = new ContaCorrente(
     new Titular(
         new CPF('556.789.010-65'),
         'João Pedro', 
         new Endereco('Cidade', 'Bairro', 'Rua', '45')
        )
    );

    $conta->deposita(500);
    $conta->saca(100);

    echo $conta->recuperaSaldo() . PHP_EOL;
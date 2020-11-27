<?php 

$idade = 18;
$numeroDePessoas = 1;

echo "ENTRADA PERMITIDA A PARTIR DE 18 ANOS, ";
echo "16 ANOS ACOMPANHADO." . PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade anos. Pode entrar sozinho!" . PHP_EOL;
    }
    elseif ($idade >= 16 && $numeroDePessoas > 1){
        echo "Você tem $idade anos e esta acompanhado. Pode entrar" . PHP_EOL;
    }
    else{
        echo "Você só tem $idade anos. Você não pode entrar!" . PHP_EOL;
    }

// $idade == 18 - idade igual a 18 anos
// || ou OR - comparação OU - $idade == 18 || $idade > 18
// and e && - camparação E
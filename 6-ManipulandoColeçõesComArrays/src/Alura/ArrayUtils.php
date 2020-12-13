<?php declare(strict_types =1);

namespace Alura;

class ArrayUtils
{
    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);
        if(is_int($posicao)){
            unset($array[$posicao]);
        } else {
            echo "Array não encontrado!";
            }
    }

    public static function encontrarPessoasComMaiorSaldo(int $saldo, Array $array): array {
        $correntistasComMaiorSaldo = array();
        foreach ($array as $chave => $valor){
            if ($valor > $saldo){
                $correntistasComMaiorSaldo[] = $chave;
            }
        }

        return $correntistasComMaiorSaldo;
    }
}
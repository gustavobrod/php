<?php

namespace Alura\Banco\Service;

class Autenticador
{
    public function tentaLogin($autenticavel, string $senha): void
    {
        if($autenticavel->podeAutenticar($senha)){
            echo "Login efetuado com sucesso!";
        } else{
            echo "Login ou Senha incorreto.";
        }
    }
}
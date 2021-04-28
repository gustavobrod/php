<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao implements InterfaceControladorRequiscao
{
    public function processaRequisicao(): void
    {
        require __DIR__ . '/../../view/cursos/formulario.php';
    }
}

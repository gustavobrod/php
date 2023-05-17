<?php

namespace Alura\Doctrine\Repository;

use Doctrine\ORM\EntityRepository;

class AlunoRepository extends EntityRepository
{
    public function buscaCursosPorAluno()
    {
        $query = $this->createQueryBuilder('a')
            ->JOIN('a.telefones', 't')
            ->JOIN('a.cursos', 'c')
            ->addSelect('t')
            ->addSelect('c')
            ->getQuery();

        return $query->getResult();
    }
}

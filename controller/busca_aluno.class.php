<?php

include_once 'Sql.php';

class BuscaAluno{
    private $nomeAluno;

    public function getNomeAluno()
    {
        return $this->nomeAluno;
    }
    public function setNomeAluno($nomeAluno)
    {
        $this->nomeAluno = '%'.$nomeAluno.'%';
    }

    


}
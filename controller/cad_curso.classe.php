<?php

// classe que captura dos dados do formulario 
// getters and setters

class CadCurso{
    // atributos
    private $nomeCurso;
    private $area;
    private $cargaHoraria;
    private $certificado;
    private $quantidadeDeAulas;
    private $professor;

    //getter e setter
    public function getNomeCurso()
    {
        return $this->nomeCurso;
    }
    public function setNomeCurso($nomeCurso)
    {
        $this->nomeCurso = $nomeCurso;
    }

    public function getArea()
    {
        return $this->area;
    }
    public function setArea($area)
    {
        $this->area = $area;
    }

    public function getCargaHoraria()
    {
        return $this->cargaHoraria;
    }
    public function setCargaHoraria($cargaHoraria)
    {
        $this->cargaHoraria = $cargaHoraria;
    }

    public function getCertificado()
    {
        return $this->certificado;
    }
    public function setCertificado($certificado)
    {
        $this->certificado = $certificado;
    }

    public function getQuantidadeDeAulas()
    {
        return $this->quantidadeDeAulas;
    }
    public function setQuantidadeDeAulas($quantidadeDeAulas)
    {
        $this->quantidadeDeAulas = $quantidadeDeAulas;
    }

    public function getProfessor()
    {
        return $this->professor;
    }
    public function setProfessor($professor)
    {
        $this->professor = $professor;
    }
}
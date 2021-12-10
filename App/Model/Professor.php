<?php

namespace App\Model;

class Professor{

    private $id, $nome, $dt_nascimento;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDtNascimento(){
        return $this->dt_nascimento;
    }

    public function setDtNascimento($dt_nascimento){
        $this->dt_nascimento = $dt_nascimento;
    }
}
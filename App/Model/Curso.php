<?php

namespace App\Model;

class Curso{

    private $id, $nome, $prof_id;

    public function __construct(){

    }

    public function getId(){
        return $this->id;
    }
    public function setId( $id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getProfId(){
        return $this->prof_id;
    }

    public function setProfId($prof_id){
        $this->prof_id = $prof_id;
    }
}

?>
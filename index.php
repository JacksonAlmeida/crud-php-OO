<?php

require_once 'vendor/autoload.php';

$prof = new \App\Model\Professor;
$prof->setId(8);
$prof->setNome("Black da Silva Jr");
$prof->setDtNascimento('2021-12-11');
$profDAO = new App\ModelDao\ProfessorDao;
$profDAO->updateProfessor($prof);

foreach($profDAO->findAll() as $prof):
    echo "id= ".$prof['id_professor']."<pre>"."nome= ".$prof['nome']."<pre>"."data de nascimento= ".$prof['dt_nascimento']."<hr>";
endforeach;

?>